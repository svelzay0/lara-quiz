import DataService from './DataService'
import { API_URL } from './api-url'
import axios from 'axios'

class QuizDataService extends DataService {
  constructor () {
    super({ name: 'quiz' })
    this.getUrl.getQuiz = () => `${API_URL}/quiz/get_quiz`
    this.getUrl.getResults = () => `${API_URL}/quiz/get_results`
  }

  getResults (data) {
    return axios
    .post(this.getUrl.getResults(), data)
    .then(response => response.data)
  }

  getQuiz () {
    return axios
      .get(this.getUrl.getQuiz())
      .then(response => response.data)
  }

}

export default new QuizDataService()
