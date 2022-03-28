(function() {
    'use strict';
    var ENTER_KEY = 13;
    var newTodoDom = document.getElementById('new-todo');
    var syncDom = document.getElementById('sync-wrapper');
    // EDITING STARTS HERE (you dont need to edit anything above this line)
    // ROCKON Step 1.
    var db = new PouchDB('todos');
    var remoteCouch = false;
    // ROCKON Step 1. END
    // Refresh broswer, should see that _pouch_todos database created in Storage > Databases > Inspect Element Frame

    //ROCKON Step 4.
    db.changes({
        since: 'now',
        live: true
    }).on('change', showTodos);
    // ROCKON Step 3. END
    //  redraw the UI to show the new data. The live:true flag means this function will continue to run indefinitely.

    // We have to create a new todo document and enter it in the database
    // ROCKON Step 4.
    function addTodo(text) {
        var todo = {
            _id: new Date().toISOString(),
            title: text,
            completed: false
        };
        db.put(todo, function callback(err, result) {
            if (!err) {
                console.log(todo);
                console.log('Successfully posted a todo!');
            }
        });
    }
    // ROCKON Step 2. END
    // each document is required to have a unique _id.
    // Enter the textbox and press enter, should see data appended to Storage > Databases > _pouch_todos -> document store inside Inspect Element "refresh" Frame.

    // Show the current list of todos by reading them from the database
    // ROCKON Step 3.
    function showTodos() {

        db.allDocs({
            include_docs: true,
            descending: true
        }, function(err, doc) {
            redrawTodosUI(doc.rows);
        });
    }
    // ROCKON Step 3. END
    // refresh browser to see any todos you have entered.

    // ROCKON Step 5.
    function checkboxChanged(todo, event) {
        todo.completed = event.target.checked;
        db.put(todo);
        console.log(todo.completed);
        console.log(todo);
        console.log('changed');
    }
    // ROCKON Step 5. END

    // User pressed the delete button for a todo, delete it
    // ROCKON Step 6.
    function deleteButtonPressed(todo) {
        db.remove(todo);
        console.log('delete');
    }

    // Initialise a sync with the remote server
    function sync() {}

    // EDITING ENDS HERE (you dont need to edit anything below this line)

    // There was some form or error syncing
    function syncError() {
        syncDom.setAttribute('data-sync-state', 'error');
    }

    // User has double clicked a todo, display an input so they can edit the title
    function todoDblClicked(todo) {
        var div = document.getElementById('li_' + todo._id);
        var inputEditTodo = document.getElementById('input_' + todo._id);
        div.className = 'editing';
        inputEditTodo.focus();
    }

    // If they press enter while editing an entry, blur it to trigger save
    // (or delete)
    function todoKeyPressed(todo, event) {
        if (event.keyCode === ENTER_KEY) {
            var inputEditTodo = document.getElementById('input_' + todo._id);
            inputEditTodo.blur();
        }
    }

    // Given an object representing a todo, this will create a list item
    // to display it.
    function createTodoListItem(todo) {
        var checkbox = document.createElement('input');
        checkbox.className = 'toggle';
        checkbox.type = 'checkbox';
        checkbox.addEventListener('change', checkboxChanged.bind(this, todo));

        var label = document.createElement('label');
        label.appendChild(document.createTextNode(todo.title));
        label.addEventListener('dblclick', todoDblClicked.bind(this, todo));

        var deleteLink = document.createElement('button');
        deleteLink.className = 'destroy';
        deleteLink.addEventListener('click', deleteButtonPressed.bind(this, todo));

        var divDisplay = document.createElement('div');
        divDisplay.className = 'view';
        divDisplay.appendChild(checkbox);
        divDisplay.appendChild(label);
        divDisplay.appendChild(deleteLink);

        var inputEditTodo = document.createElement('input');
        inputEditTodo.id = 'input_' + todo._id;
        inputEditTodo.className = 'edit';
        inputEditTodo.value = todo.title;
        inputEditTodo.addEventListener('keypress', todoKeyPressed.bind(this, todo));
        var li = document.createElement('li');
        li.id = 'li_' + todo._id;
        li.appendChild(divDisplay);
        li.appendChild(inputEditTodo);
        if (todo.completed) {
            li.className += 'complete';
            checkbox.checked = true;
        }
        return li;
    }

    function redrawTodosUI(todos) {
        console.log('Start redrawTodosUI');
        var ul = document.getElementById('todo-list');
        ul.innerHTML = '';

        todos.forEach(function(todo) {
            ul.appendChild(createTodoListItem(todo.doc));
            console.log(todo.doc);
        });
        console.log('Stop redrawTodosUI');
    }

    function newTodoKeyPressHandler(event) {
        if (event.keyCode === ENTER_KEY) {
            // Added validation check to ignore empty field
            var trimmedText = newTodoDom.value.trim();
            if (trimmedText) {
                addTodo(trimmedText);
                console.log('inserted');
            } else {
                console.log('empty, insert ignore');
            }
            newTodoDom.value = '';
        }
    }

    function addEventListeners() {
        newTodoDom.addEventListener('keypress', newTodoKeyPressHandler, false);
    }

    addEventListeners();
    showTodos();

    if (remoteCouch) {
        sync();
    }

})();