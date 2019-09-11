import home from '../components/home';
import newSupport from '../components/pages/forms/new-request';
import searchSupport from '../components/pages/forms/search-request';
import requestNew from '../components/pages/tables/request-new';
import support from '../components/pages/support';
import app from '../components/app';
import pageAuth from '../components/auth/page';
import login from '../components/auth/login';




export const routes = [
      { 
          path: '/', 
          component: app,
          meta : {
              requireAuth : true,
          },
          children : [
              {
                path: '/',component: home
              },
              {
                path: '/support',component: support,
              },
              {
                path: '/support/new',component: newSupport,
              },
              {
                path: '/support/request-new',component: requestNew,
              },
              {
                path: '/support/process',component: requestNew,
              },
              {
                path: '/support/search',component: searchSupport,
              },
              {
                path: '/support/done',component: searchSupport,
              }
              // end support Routing
          ]
        },
        {
            path : '/auth',component : pageAuth,
            children : [
                { 
                    path : '/',
                    redirect : '/login'

                },
                { 
                    path : '/login',
                    component : login

                }
            ]
        },
   
 
        { 
            path: '*', component: require('../components/404.vue').default 
        },


];