import Axios from 'axios'

const ApiEndpoint = import.meta.env.VITE_API_ENDPOINT;
const Token = import.meta.ENDPOINT_KEY


const axios = Axios.create({
    baseURL: ApiEndpoint,
    withCredentials: true, 
    withXSRFToken: true, 
    headers: {
        "Content-Type": "application/json",
        "Accept": "application/json",
        'X-CSRF-TOKEN': Token
    }
})

export default axios