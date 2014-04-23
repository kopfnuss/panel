<?php echo $header ?>

<div class="content manager">

  <header class="manager__header">
    <h1 class="alpha">Manage Files for <a ui-sref="page({uri: page.uri})">{{page.title}}</a></h1>
    <a class="manager__back" ui-sref="page({uri: page.uri})"><i class="fa fa-arrow-circle-left"></i> Back to page</a>
    <a ng-show="page.files.length > 0" class="manager__toggle" ui-sref="files.modal.upload"><i class="fa fa-cloud-upload"></i> <span>Upload a new file</span></a>
  </header>

  <div class="files">

    <article class="file" ng-repeat="file in page.files">
      <figure>
        <a ng-show="file.type == 'image'" class="file__preview" ui-sref="file({filename : file.filename, uri: page.uri})" style="background-image: url({{file.thumb}})"></a>
        <a ng-show="file.type != 'image'" class="file__preview" ui-sref="file({filename : file.filename, uri: page.uri})">
          <span>{{file.extension}}</span>
        </a>
        <figcaption class="file__info">
          <a ui-sref="file({filename : file.filename, uri: page.uri})">
            <strong>{{file.filename}}</strong>
            <small>{{file.type}} / {{file.size}}</small>
          </a>
        </figcaption>
        <nav class="manager__options">
          <a ui-sref="file({filename : file.filename, uri: page.uri})">
            <i class="fa fa-pencil"></i> edit
          </a><!--
       --><a ui-sref="files.modal.delete({filename : file.filename})">
            <i class="fa fa-trash-o"></i> delete
          </a>
        </nav>
      </figure>
    </article>

  </div>

  <div class="manager__empty" ng-show="page.files.length == 0">
    <a ui-sref="files.modal.upload" href=""><i class="fa fa-cloud-upload fa-lg"></i> <span>Upload your first file</span></a>
  </div>

</div>