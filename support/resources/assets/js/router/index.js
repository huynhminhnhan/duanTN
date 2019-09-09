import home from '../components/home';
import newSupport from '../components/pages/forms/new-request';
import searchSupport from '../components/pages/forms/search-request';
import requestNew from '../components/pages/tables/request-new';

const index  = {
   
    template: `
        <transition name="pages" mode="out-in">
            <router-view></router-view>
        </transition>`
}




export const routes = [
   
    { path: '/support',component: index,
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

];