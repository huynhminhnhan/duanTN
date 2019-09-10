import home from '../components/home';
import children from '../components/children';
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
    { path: '/', component: home },
    { path: '*', component: require('../components/404.vue').default },


];