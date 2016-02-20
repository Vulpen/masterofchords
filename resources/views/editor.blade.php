@extends('app')
@section('content')
        <!DOCTYPE html>

    <style>
        .ta-editor {
            min-height: 1000px;
            height: auto;
            overflow: auto;
            font-family: inherit;
            font-size: 100%;
            margin:20px 0;
        }
    </style>

    <script src='https://ajax.googleapis.com/ajax/libs/angularjs/1.3.11/angular.min.js'></script>

    <script src='http://textangular.com/dist/textAngular-rangy.min.js'></script>

    <script src='http://textangular.com/dist/textAngular-sanitize.min.js'></script>

    <script src='http://textangular.com/dist/textAngular.min.js'></script>


<div ng-app="textAngularTest" ng-controller="wysiwygeditor" class="container app">
    <h1>Music Editor</h1>
    <div>
        Artist: <input type="text" name="artist"><br>
        Song: <input type="text" name="songName"><br><br><br>
        <button type="button">Submit Song</button>
        <br><br><br>
    </div>

    <div text-angular="text-angular" name="htmlcontent" ng-model="htmlcontent"></div>

    <button type="button">Submit Song</button>
</div>
<script>
    angular.module("textAngularTest", ['textAngular']).controller('wysiwygeditor', function wysiwygeditor($scope) {
        $scope.htmlcontent = $scope.orightml;
        $scope.disabled = false;
    });
</script>
<br>
@endsection