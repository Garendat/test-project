import axios from 'axios'

const instance = axios.create({
    baseURL: 'http://test-project.loc/api'
})

instance.defaults.headers.common['Content-Type'] = "application/json";
instance.defaults.headers.common['Accept'] = "application/json";

export default instance
