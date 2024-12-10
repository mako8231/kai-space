import { endpointReq } from '@/axios.conf.js'

export const verifySession = async function(){
    let response = await endpointReq("GET", '/api/user', {})
      .then((res) => {
        return res
      })
      .catch(err => {
        console.log(err);
      })

    return response;
}