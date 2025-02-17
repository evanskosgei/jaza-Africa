import axios from 'axios';
window.axios = axios;
// import jQuery from 'jquery';

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

import jQuery from 'jquery';

window.$ = jQuery;
