## 703 Vue.js CRUD
2017.06.09 [HTML, CSS, JS]

[HTML, CSS, JS, VUE]

Test it http://eldus.github.io/170609 or http://io.github.eldus.com:81/170609

Vue.js is optimized for DOM manipulation. Vue.js uses component driven model to manipulate document object model. VueJS do not require jQuery.

Vue.js is a more flexible, less opinionated solution. Vue.js has a much less complicated learning curve in comparison with AngularJS. It’s very easy for one to learn the ropes of Vue.js. It allows us to write simple JavaScript, as its source code is very readable.

Note: AngularJS is a full-blown framework, with lots of tools right of the box. It takes more time to get used to it than Vue.js. Vue.js is very flexible, and is probably considered a library instead of a framework. Vue.js does everything you need, in a simple, clean way. AngularJS is unnecessarily complicated and less powerful.

Learning Curve: Vue.js is easier to learn. If you know vanilla javascript.

Performance: Vue.js v2 is much faster as compared to AngularJS

Typical script with two-way data binding:

    <div id="app">
    <input type="text" v-model="message"/>
    <span>{{message}}</span>
    </div>
    <script>
    new Vue({
        el:'#app',data:''
    });
    <script>

ES2015 vs ES6

ES2015

    var salary = [10000, 20000, 30000];
    var with1000Increment = salary.map(x => x + 1000);
    console.log(with1000Increment);
    var name = "Arun";
    var user = {
        name, getAddress() {
            return "Colombo. Sri Lanka";
        }
    };

ES6

    "use strict";
    var salary = [10000, 20000, 30000];
    var with1000Increment = salary.map(function(x) {
        return x + 1000;
    });
    console.log(with1000Increment);
    var name = "Arun";
    var user = {
        name: name,
        getAddress: function getAddress() {
            return "Colombo. Sri Lanka";
        }
    };

Showing Variables:

    console.log(name);
    console.log(user.name);
    console.log(user.getAddress);
    var name = "Arunoda";
    var address = "Colombo, Sri Lanka";
    var greeting = `My Name is ${name} and I live in ${address}`;
    console.log(greeting);

Reference:

* https://www.youtube.com/watch?v=utJGnK9D_UQ
* https://vuejs.org/v2/guide/
* https://vuejs.org/v2/examples/
* https://vuejs.org/v2/guide/comparison.html
* https://vuejs.org/v2/guide/index.html#Declarative-Rendering
* https://coligo.io/building-a-mobile-app-with-cordova-vuejs/
* https://blog.uxtools.co/designers-learning-javascript-angular-react-or-vue-465509d848bb
* https://about.gitlab.com/2016/10/20/why-we-chose-vue/
