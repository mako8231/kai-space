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


export async function endpointReq(method, route, data) 
{
    const config = {
        method,
        url: route,
        data,
    }

    try 
    {
        //Using axios to calling out to the endpoint route 
        const response = await axios(config);
        return response;

    } catch (err) {
        console.log("Error during fetch: ", err)
        throw err;
    }

}

export default axios