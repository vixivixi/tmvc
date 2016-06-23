<pre>
{% for new in this.news %}
<h1><a href='/news/news/onenews/{{new.id}}'>{{new.header}}</a></h1>
<p>{{new.article}}</p>
<p>{{new.timestamp}}</p>
<p>{{new.author}}</p>
<hr>
