<div class="list-modules-item">
  <h4 class="list-modules-item__title"><span class="num">{{$i}}.{{$j}}</span>{{$module->title}}</h4>
<p class="list-modules-item__steps"><span>{{$module->steps->count()}}</span> шагов</p>
  <a href="{{route("profile.course.module.edit", [$module])}}" class="btn list-modules-item__btn">Редактировать</a>
</div>