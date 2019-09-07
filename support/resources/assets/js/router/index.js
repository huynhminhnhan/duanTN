import home from '../components/home';
import newRequest from '../components/pages/forms/new-request';


export const routes = [
	{ path: '/', name: 'home', component: home },
    { path: '/new-request', name: 'newRequest', component: newRequest}
];