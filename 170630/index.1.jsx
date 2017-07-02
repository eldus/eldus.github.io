/*jshint esversion: 6 */

function formatName(user) { return user.firstName + ' ' + user.lastName; } const user = {
    firstName: 'John', lastName: 'Doe'
};
const element = (
    <p>React + ES2015 , in JSX, yo. Hello, {formatName(user)}!</p>
);

ReactDOM.render(element, document.getElementById('root'));