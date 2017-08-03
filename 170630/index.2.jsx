/*jshint esversion: 6 */
var HelloMessage = React.createClass({
    render: function render() {
        return React.createElement('div', null, 'Hello ', this.props.name);
    }
});
ReactDOM.render(React.createElement(HelloMessage, { name: 'John' }), document.getElementById('app'));