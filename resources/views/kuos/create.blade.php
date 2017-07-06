@extends('app')

@section('content')
<div class="card">
  <div class="card-header">
    <h3 class="card-header-title">扩列信息</h3>
  </div>

  <div class="card-content">

    <div class="columns is-mobile is-multiline">

      <div class="column is-12-mobile is-half-tablet">

        <div class="field">
          <label class="label">封面</label>
          <p class="control">
            <input type="file" name="" value="">
          </p>
        </div>

        <div class="field">
          <label class="label">作品</label>
          <p class="control">
            <input type="file" name="" value="">
          </p>
        </div>

        <div class="field">
          <label class="label">QQ二维码</label>
          <p class="control">
            <input type="file" name="" value="">
          </p>
        </div>

      </div>

      <div class="column is-12-mobile is-half-tablet">

        <div class="field">
          <label class="label">标题</label>
          <p class="control">
            <input class="input" type="text" placeholder="Text input">
          </p>
        </div>

        <div class="field">
          <label class="label">文字简介</label>
          <p class="control">
            <textarea class="textarea" placeholder="Textarea"></textarea>
          </p>
        </div>

        <div class="field">
          <label class="label">QQ号</label>
          <p class="control">
            <input class="input" type="text" name="" value="">
          </p>
        </div>

        <div class="field">
          <label class="label">标签</label>
          <p class="control">
            <input class="input" type="text" name="" value="">
          </p>
        </div>

        <div class="field">
          <p class="control">
            <button class="button is-danger">
              保存提交
            </button>
          </p>
        </div>

      </div>

    </div>

  </div><!-- .card-content -->

</div><!-- .card -->

<div class="columns is-mobile">
  <div class="column">
    <div class="card">
      <div class="card-header">
        <h3 class="card-header-title">以下是预览</h3>
      </div>
      <div class="card-content">
        <div class="field">
          <p class="control">
            <button class="button is-danger">
              保存提交
            </button>
          </p>
        </div>
      </div>
    </div>

  </div>
</div>

@stop
