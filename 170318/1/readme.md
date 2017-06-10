## 150323/1 PouchDB v3.3 Javascript
2015.04.01 [HTML, JS, POUCHDB]

Test it http://eldus.github.io/150323/1

Pouchdb provides local storage of data in a browser.  Data is store in a NOSQL database and able to sync to remote Couchdb database.

```{.html}
<html>
<script src="js/pouchdb-3.3.1.min.js"></script>
</html>
```
```{.js}
Object.defineProperty(this, 'pdb', {writable: true});
this.pdb = new PouchDB(databasename);

```

#### Requirements
* HTML5 supported browser
``` console
$ bower install pouchdb
```

#### Others

* 150323/1/i01.html Using remote Couchdb services.

#### Challenges
* the sample javascript codes is difficult to follow.

#### References:
* https://www.tutorialspoint.com/pouchdb/pouchdb_create_document.htm
* https://github.com/webinista/PouchNotes
* https://pouchdb.com/guides/