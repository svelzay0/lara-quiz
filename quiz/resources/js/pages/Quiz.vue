<template>
  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">Quiz</div>

          <div class="card-body">
              Test Page
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
      search: '',
      types: [
        { text: 'Физическое лицо', value: 'Физическое лицо' },
        { text: 'Юридическое лицо', value: 'Юридическое лицо' },
      ],
      // defaultFilters: {
      //   type: null,
      //   dont_call_for_review: null,
      //   company_name: null,
      //   contact_person: null,
      //   position: null,
      //   created_at_from: null,
      //   blacklist: '0'
      // },
      filters: {
        type: null,
        dont_call_for_review: null,
        company_name: null,
        contact_person: null,
        position: null,
        created_at_from: null,
        blacklist: '0',
      },
      url: '/api/manager_customers',
      showForm: false,
      readonly: false,
      model: null,
      formKey: 1,
      // form: new Form({})
    }
  },
  created () {
    QuizDataService.getQuestions()
    // .then(data => this.init(data))
  },
  methods: {

  }
}
</script>
