import Api from './Api'
// import { getMaxListeners } from 'cluster';

export default {
    register (credentials) {
        return Api().post('register', credentials)
    }
}
