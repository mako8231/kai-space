import { endpointReq } from '@/axios.conf.js'

export const verifySession = async function(){
    let response = await endpointReq("GET", '/api/user', {})
      .then((res) => {
        return res
      })
      .catch(err => {
        return err
      })

    return response;
}

export const logout = async function () {
  let response = await endpointReq('POST', '/logout', {})
    .then((res) => {
      return res
    })
    .catch(err => {
      return err; 
    })
  
  return response; 
}