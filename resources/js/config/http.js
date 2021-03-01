import axios from 'axios'

const instance = axios.create({
    baseURL: process.env.APP_URL
})

instance.defaults.headers.common['Content-Type'] = "application/json";
instance.defaults.headers.common['Accept'] = "application/json";

export default instance
