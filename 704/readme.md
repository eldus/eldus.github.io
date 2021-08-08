## 1704 ReactJS
2017.06.30 [HTML, CSS, JS]

Test it http://eldus.github.io/704

ReactJS is a library.

ReactJS is simple and there is very little to learn about React once you realize that components are functions and JSX (a preprocessor step that adds XML syntax to JavaScript) is also functions.

You can use React without JSX but JSX makes React a lot more elegant.

ReactJS is a JavaScript library for building user interfaces.  Here are some of its features:

* Declarative: React makes it painless to create interactive UIs. Design simple views for each state in your application, and React will efficiently update and render just the right components when your data changes. Declarative views make your code more predictable, simpler to understand, and easier to debug.

* Component-Based: Build encapsulated components that manage their own state, then compose them to make complex UIs. Since component logic is written in JavaScript instead of templates, you can easily pass rich data through your app and keep state out of the DOM.

* Learn Once, Write Anywhere: We don't make assumptions about the rest of your technology stack, so you can develop new features in React without rewriting existing code.

React can also render on the server using Node and power mobile apps using React Native. Where, React Native is a web framework for Hybrid Development.

usage of pre-processor like babel:
```
<script src="https://unpkg.com/babel-standalone@6.15.0/babel.min.js"></script>
```
Babel is a transpiler for JavaScript best known for its ability to turn ES6 (the next version of JavaScript) into code that runs in your browser today.

For example the following ES6 code:
```
const input = [1, 2, 3];
console.log(input.map(item => item + 1)); // [2, 3, 4]
```
is compiled by Babel to the following javascript:
```
var input = [1, 2, 3];
console.log(input.map(function (item) {
  return item + 1;
})); // [2, 3, 4]
```

Another example:
```
class HelloMessage extends React.Component {
  render() {
    return <div>Hello {this.props.name}</div>;
  }
}
ReactDOM.render(
  <HelloMessage name="John" />,
  document.getElementById('root')
);
```

Or this...
```
var HelloMessage = React.createClass({
    render: function render() {
        return React.createElement('div', null, 'Hello ', this.props.name);
    }
});
ReactDOM.render(React.createElement(HelloMessage, { name: 'John' }), document.getElementById('app'));
```

References:

* https://cdnjs.com/libraries/react/15.6.1

* https://facebook.github.io/react/docs/introducing-jsx.html

* https://codepen.io/gaearon/pen/RVKbvW?editors=1010

* https://facebook.github.io/react/docs/integrating-with-other-libraries.html#integrating-with-other-view-libraries
