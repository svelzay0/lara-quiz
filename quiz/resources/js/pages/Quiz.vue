<template>
  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">Quiz</div>
          <div class="card-body" v-if="quiz">
              <button v-if="quizNotStarted" v-on:click="testInProgress()">Начать тест</button>
              <button v-else v-on:click="stopProgress()">Прервать тест</button>
          </div>
        </div>
        <br>
        <div v-if="quizNotStarted!=true">
            <div class="card" v-for="(question, index) in quiz.questions">
                <div v-show="index === questionIndex">
                    <div class="card-header"><i>Вопрос {{ question.uuid.slice(-1) }}/5:</i>
                        <br>
                        <b>{{ question.text }}</b>
                    </div>
                    <div class="card-body" v-for="choice in question.choices">
                        <div>
                            <input type="checkbox"
                                   :id="choice.uuid"
                                   :value="choice.uuid"
                                   v-model="results"                                  >
                            <label :for="choice.uuid">{{ choice.text }}</label>
                            <br>
                        </div>
                    </div>
                    <div class="card-body">
                        <button v-if="questionIndex > 0" v-on:click="prev">Предыдущий вопрос</button>
                        <button v-on:click="next">Далее</button>
                    </div>
                </div>
            </div>
            <div v-if="mark != null && mark > -0.1">
                <h4>
                    Тест завершен.
                </h4>
                <p>
                    Ваша оценка: {{ mark }}/1
                </p>
            </div>
            <div v-if="mark < 0">
                <h4>
                    Тест завершен.
                </h4>
                <p>
                    Вами было выбрано слишком много не правильных пунктов. Пройдите тест заного.
                </p>
            </div>
        </div>
      </div>
    </div>

  </div>

</template>

<script>
import QuizDataService from '../services/QuizDataService'

export default {
  data () {
    return {
      quizNotStarted: true,
      quiz: null,
      questionIndex: 0,
      results: [],
      mark: null
    }
  },
  created () {
    QuizDataService.getQuiz().then(data => this.init(data))
  },
  methods: {
      init(data) {
          this.quiz = data[0]
      },
      testInProgress() {
          this.quizNotStarted = false
      },
      stopProgress() {
          this.quizNotStarted = true
          this.questionIndex = 0,
          this.results = [],
          this.mark = null
      },
      next() {
        this.questionIndex++;
        console.log(this.results)
        if (this.questionIndex > 4) {
            QuizDataService.getResults(this.results).then(data => {
                this.mark = data
                console.log(this.mark)
            })
        }
      },
      prev() {
        this.questionIndex--;
      },
  }
}
</script>
