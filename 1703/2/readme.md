## 170609/2 All about Vue.js Routing

2/index.html  Vue.js Routing Concept
2/iu1.html    Vue.js Routing CRUD
2/iu2.html    Vue.js Routing Simple Foobar

#### HTML

use router-link component for navigation. specify the link by passing the to prop. <router-link> will be rendered as an A tag by default. <router-view> is route outlet component matched by the route will render here.

```
<div id="app">
    <p>
    <router-link to="/foo">Go to Foo</router-link>
    <router-link to="/bar">Go to Bar</router-link>
    </p>
    <router-view></router-view>
</div>
```

#### Javascript

1 - Define route components. These can be imported from other files.
```
    const Foo = { template: '<div>foo</div>' }
    const Bar = { template: '<div>bar</div>' }
```
2 - Define some routes. Each route should map to a component. The "component" can either be an actual component constructor created via Vue.extend(), or just a component options object.
```
    const routes = [
    { path: '/foo', component: Foo },
    { path: '/bar', component: Bar }
    ]
```
3 - Create the router instance and pass the routes option. You can pass in additional options here.
```
    const router = new VueRouter({
        routes // short for routes: routes
    })
```
4 - Create and mount the root instance. Make sure to inject the router with the router option to make the whole app router-aware.
```
    var app = new Vue({
        router
    }).$mount('#app')
```
Now the app has started!


#### Reference:
* https://router.vuejs.org/en/