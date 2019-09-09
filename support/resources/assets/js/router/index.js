import home from '../components/home';
import newSupport from '../components/pages/forms/new-request';
import searchSupport from '../components/pages/forms/search-request';
import requestNew from '../components/pages/tables/request-new';

const index  = {
    data () {
        return {
          transitionName: 'slide-left'
        }
      },
      beforeRouteUpdate (to, from, next) {
        const toDepth = to.path.split('/').length
        const fromDepth = from.path.split('/').length
        this.transitionName = toDepth < fromDepth ? 'slide-right' : 'slide-left'
        next()
      },
    template: `
        <transition :name="transitionName">
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