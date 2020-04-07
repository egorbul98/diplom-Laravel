<footer class="footer-editor">

    <div class="main-wrap">
        <div class="footer-editor-wrap">
            @if ($body=="sections")
              <a href="{{route("profile.course.show", $course)}}" class="btn btn-gray">Вернуться</a>
              <a href="{{route("profile.course.sections.save", $course->id)}}" class="btn"
                  id="btn-save-sections"><span class="icon m-r-8"><i class="fas fa-save"></i></span> Сохранить</a>
            @elseif($body=="module")
              <a href="{{route("profile.course.show", $module->section->course)}}" class="btn btn-gray">Вернуться</a>
              <a href="{{route("profile.course.module.save", $module->id)}}" class="btn"
                  id="btn-save-sections"><span class="icon m-r-8"><i class="fas fa-save"></i></span> Сохранить</a>
            @endif


        </div>
    </div>
</footer>