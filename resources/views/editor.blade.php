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

        }
    </style>

    <script src='https://ajax.googleapis.com/ajax/libs/angularjs/1.3.11/angular.min.js'></script>

    <script src='http://textangular.com/dist/textAngular-rangy.min.js'></script>

    <script src='http://textangular.com/dist/textAngular-sanitize.min.js'></script>

    <script src='http://textangular.com/dist/textAngular.min.js'></script>


<div ng-app="textAngularTest" ng-controller="wysiwygeditor" class="container app">
    <h1>Music Editor</h1>
    <div>
        <tr>
            <td>Artist: </td><td><input type="text" name="artist"></td>
            <br>
        </tr>
        <tr>
            <td>Song: </td><td><input type="text" name="songName"></td>
            <br>
        </tr>
        <br><br>
	    <a href="#" class="btn btn-default">Submit Song</a>
        <br><br><br>
    </div>

    <div text-angular="text-angular" name="htmlcontent" ng-model="htmlcontent"></div>

    <<a href="#" class="btn btn-default">Submit Song</a>
</div>
<script>
    angular.module("textAngularTest", ['textAngular']).controller('wysiwygeditor', function wysiwygeditor($scope) {
        $scope.htmlcontent = $scope.orightml;
        $scope.disabled = false;
    });
</script>
<br>


@endsection