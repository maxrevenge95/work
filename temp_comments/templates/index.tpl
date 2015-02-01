<legend id="lab">Комментарии</legend>
<ul>
{foreach  item=con from=$result}
<li class="myli">
<label for="text">{$con.autor}</label><br> <p name="text">{$con.commentText}</p>
</li>
{foreachelse}
Здесь пока нет комментариев...
{/foreach}
</ul>