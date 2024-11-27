import Axios from 'axios'
import config from '../appconf.json'

const ApiEndpoint = `http://localhost:8000`

const axios = Axios.create({
    baseURL: ApiEndpoint,
    withCredentials: true, 
    withXSRFToken: true, 
    headers: {
        "Content-Type": "application/json",
        "Accept": "application/json",
        'X-CSRF-TOKEN': config['csrf_token']
    }
})

export default axios