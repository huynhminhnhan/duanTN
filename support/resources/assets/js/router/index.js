import home from '../components/home';
import children from '../components/children';
import login from '../components/login';
import app from '../components/app';



import newSupport from '../components/pages/forms/new-request';
import searchSupport from '../components/pages/forms/search-request';
import requestNew from '../components/pages/tables/request-new';



export const routes = [
   
    { path: '/support',component: children,
        children: [
            { 
                path: 'new', 
                component: newSupport 
            },
            { 
                path: 'request-new', 
                component: requestNew 
            },
            { 
                path: 'process', 
                component: requestNew 
            },
            { 
                path: 'done', 
                component: requestNew 
            },
            { 
                path: 'search', 
                component: searchSupport
            },
        ]
    },   
    { path: '/home' ,component: require('../components/app.vue').default},
    
    { path: '/', component: login }
    
    
    
];
// Vue.component('app', require('../components/app.vue').default);