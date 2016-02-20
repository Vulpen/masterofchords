@extends('app')
@section('content')
    <ng-app="textAngularTest" ng-controller="wysiwygeditor" class="container app">

    <head><style type="text/css">@charset "UTF-8";[ng\:cloak],[ng-cloak],[data-ng-cloak],[x-ng-cloak],.ng-cloak,.x-ng-cloak,.ng-hide:not(.ng-hide-animate){display:none !important;}ng\:form{display:block;}</style>
        <meta http-equiv="X-UA-Compatible" content="IE=10">
        <meta name="fragment" content="!">
        <meta name="author" content="Austin Anderson">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="contact" content="austin@rarebreedstudios.com">
        <meta name="keywords" content="angularjs,angular.js,texteditor,text editor,Wysiwyg,javascript text editor,javascript Wysiwyg">
        <meta name="copyright" content="Austin Anderson. All rights reserved">
        <meta charset="utf-8">
        <title>textAngular :: Lightweight Angular.js, Javascript Wysiwyg/Text-Editor</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="images/favicon.png">
        <link rel="author" href="https://www.linkedin.com/in/austinanderson1">
        <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,300">
        <link rel="stylesheet" href="dist/textAngular.css">
        <link rel="stylesheet" href="css/style.css" type="text/css">
        <style type="text/css"></style></head>

    <body>
    <div ng-app="TextAngularDemo" ng-controller="DemoController" class="ng-scope">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1>Music Editor</h1>
                    <div>
                        <tr>
                            <td>Artist: </td><td><input type="text" name="artist"></td>
                            <br>
                        </tr> <br>
                        <tr>
                            <td>Song: </td><td><input type="text" name="songName"></td>
                            <br>
                        </tr>
                        <br><br>
                        <a href="#" class="btn btn-default">Submit Song</a>
                        <br><br><br>
                    </div>
                    <div text-angular="" ng-model="htmlContent" name="demo-editor" ta-text-editor-class="border-around"
                         ta-html-editor-class="border-around" class="ng-pristine ng-untouched ng-valid ng-isolate-scope ta-root">
                        <div text-angular-toolbar="" name="textAngularToolbar2840683748945594" class="ng-scope ng-isolate-scope ta-toolbar btn-toolbar">
                            <div class="btn-group"><button type="button" class="btn btn-default ng-scope" name="h1" ta-button="ta-button"
                                                           ng-disabled="isDisabled()" tabindex="-1" ng-click="executeAction()" ng-class="displayActiveToolClass(active)"
                                                           title="Heading 1" unselectable="on" disabled="disabled">H1</button><button type="button" class="btn btn-default ng-scope"
                                                                                                                                      name="h2" ta-button="ta-button" ng-disabled="isDisabled()" tabindex="-1" ng-click="executeAction()" ng-class="displayActiveToolClass(active)" title="Heading 2" unselectable="on" disabled="disabled">H2</button><button type="button" class="btn btn-default ng-scope" name="h3" ta-button="ta-button" ng-disabled="isDisabled()" tabindex="-1" ng-click="executeAction()" ng-class="displayActiveToolClass(active)" title="Heading 3" unselectable="on" disabled="disabled">H3</button><button type="button" class="btn btn-default ng-scope" name="h4" ta-button="ta-button" ng-disabled="isDisabled()" tabindex="-1" ng-click="executeAction()" ng-class="displayActiveToolClass(active)" title="Heading 4" unselectable="on" disabled="disabled">H4</button><button type="button" class="btn btn-default ng-scope" name="h5" ta-button="ta-button" ng-disabled="isDisabled()" tabindex="-1" ng-click="executeAction()" ng-class="displayActiveToolClass(active)" title="Heading 5" unselectable="on" disabled="disabled">H5</button><button type="button" class="btn btn-default ng-scope" name="h6" ta-button="ta-button" ng-disabled="isDisabled()" tabindex="-1" ng-click="executeAction()" ng-class="displayActiveToolClass(active)" title="Heading 6" unselectable="on" disabled="disabled">H6</button><button type="button" class="btn btn-default ng-scope" name="p" ta-button="ta-button" ng-disabled="isDisabled()" tabindex="-1" ng-click="executeAction()" ng-class="displayActiveToolClass(active)" title="Paragraph" unselectable="on" disabled="disabled">P</button><button type="button" class="btn btn-default ng-scope" name="pre" ta-button="ta-button" ng-disabled="isDisabled()" tabindex="-1" ng-click="executeAction()" ng-class="displayActiveToolClass(active)" title="Preformatted text" unselectable="on" disabled="disabled">pre</button><button type="button" class="btn btn-default ng-scope" name="quote" ta-button="ta-button" ng-disabled="isDisabled()" tabindex="-1" ng-click="executeAction()" ng-class="displayActiveToolClass(active)" title="Quote/unquote selection or paragraph" unselectable="on" disabled="disabled"><i class="fa fa-quote-right"></i></button></div><div class="btn-group"><button type="button" class="btn btn-default ng-scope" name="bold" ta-button="ta-button" ng-disabled="isDisabled()" tabindex="-1" ng-click="executeAction()" ng-class="displayActiveToolClass(active)" title="Bold" unselectable="on" disabled="disabled"><i class="fa fa-bold"></i></button><button type="button" class="btn btn-default ng-scope" name="italics" ta-button="ta-button" ng-disabled="isDisabled()" tabindex="-1" ng-click="executeAction()" ng-class="displayActiveToolClass(active)" title="Italic" unselectable="on" disabled="disabled"><i class="fa fa-italic"></i></button><button type="button" class="btn btn-default ng-scope" name="underline" ta-button="ta-button" ng-disabled="isDisabled()" tabindex="-1" ng-click="executeAction()" ng-class="displayActiveToolClass(active)" title="Underline" unselectable="on" disabled="disabled"><i class="fa fa-underline"></i></button><button type="button" class="btn btn-default ng-scope" name="strikeThrough" ta-button="ta-button" ng-disabled="isDisabled()" tabindex="-1" ng-click="executeAction()" ng-class="displayActiveToolClass(active)" title="Strikethrough" unselectable="on" disabled="disabled"><i class="fa fa-strikethrough"></i></button><button type="button" class="btn btn-default ng-scope" name="ul" ta-button="ta-button" ng-disabled="isDisabled()" tabindex="-1" ng-click="executeAction()" ng-class="displayActiveToolClass(active)" title="Unordered List" unselectable="on" disabled="disabled"><i class="fa fa-list-ul"></i></button><button type="button" class="btn btn-default ng-scope" name="ol" ta-button="ta-button" ng-disabled="isDisabled()" tabindex="-1" ng-click="executeAction()" ng-class="displayActiveToolClass(active)" title="Ordered List" unselectable="on" disabled="disabled"><i class="fa fa-list-ol"></i></button><button type="button" class="btn btn-default ng-scope" name="redo" ta-button="ta-button" ng-disabled="isDisabled()" tabindex="-1" ng-click="executeAction()" ng-class="displayActiveToolClass(active)" title="Redo" unselectable="on" disabled="disabled"><i class="fa fa-repeat"></i></button><button type="button" class="btn btn-default ng-scope" name="undo" ta-button="ta-button" ng-disabled="isDisabled()" tabindex="-1" ng-click="executeAction()" ng-class="displayActiveToolClass(active)" title="Undo" unselectable="on" disabled="disabled"><i class="fa fa-undo"></i></button><button type="button" class="btn btn-default ng-scope" name="clear" ta-button="ta-button" ng-disabled="isDisabled()" tabindex="-1" ng-click="executeAction()" ng-class="displayActiveToolClass(active)" title="Clear formatting" unselectable="on" disabled="disabled"><i class="fa fa-ban"></i></button></div><div class="btn-group"><button type="button" class="btn btn-default ng-scope" name="justifyLeft" ta-button="ta-button" ng-disabled="isDisabled()" tabindex="-1" ng-click="executeAction()" ng-class="displayActiveToolClass(active)" title="Align text left" unselectable="on" disabled="disabled"><i class="fa fa-align-left"></i></button><button type="button" class="btn btn-default ng-scope" name="justifyCenter" ta-button="ta-button" ng-disabled="isDisabled()" tabindex="-1" ng-click="executeAction()" ng-class="displayActiveToolClass(active)" title="Center" unselectable="on" disabled="disabled"><i class="fa fa-align-center"></i></button><button type="button" class="btn btn-default ng-scope" name="justifyRight" ta-button="ta-button" ng-disabled="isDisabled()" tabindex="-1" ng-click="executeAction()" ng-class="displayActiveToolClass(active)" title="Align text right" unselectable="on" disabled="disabled"><i class="fa fa-align-right"></i></button><button type="button" class="btn btn-default ng-scope" name="justifyFull" ta-button="ta-button" ng-disabled="isDisabled()" tabindex="-1" ng-click="executeAction()" ng-class="displayActiveToolClass(active)" title="Justify text" unselectable="on" disabled="disabled"><i class="fa fa-align-justify"></i></button><button type="button" class="btn btn-default ng-scope" name="indent" ta-button="ta-button" ng-disabled="isDisabled()" tabindex="-1" ng-click="executeAction()" ng-class="displayActiveToolClass(active)" title="Increase indent" unselectable="on" disabled="disabled"><i class="fa fa-indent"></i></button><button type="button" class="btn btn-default ng-scope" name="outdent" ta-button="ta-button" ng-disabled="isDisabled()" tabindex="-1" ng-click="executeAction()" ng-class="displayActiveToolClass(active)" title="Decrease indent" unselectable="on" disabled="disabled"><i class="fa fa-outdent"></i></button></div><div class="btn-group"><button type="button" class="btn btn-default ng-scope" name="html" ta-button="ta-button" ng-disabled="isDisabled()" tabindex="-1" ng-click="executeAction()" ng-class="displayActiveToolClass(active)" title="Toggle html / Rich Text" unselectable="on" disabled="disabled"><i class="fa fa-code"></i></button><button type="button" class="btn btn-default ng-scope" name="insertImage" ta-button="ta-button" ng-disabled="isDisabled()" tabindex="-1" ng-click="executeAction()" ng-class="displayActiveToolClass(active)" title="Insert image" unselectable="on" disabled="disabled"><i class="fa fa-picture-o"></i></button><button type="button" class="btn btn-default ng-scope" name="insertLink" ta-button="ta-button" ng-disabled="isDisabled()" tabindex="-1" ng-click="executeAction()" ng-class="displayActiveToolClass(active)" title="Insert / edit link" unselectable="on" disabled="disabled"><i class="fa fa-link"></i></button><button type="button" class="btn btn-default ng-scope" name="insertVideo" ta-button="ta-button" ng-disabled="isDisabled()" tabindex="-1" ng-click="executeAction()" ng-class="displayActiveToolClass(active)" title="Insert video" unselectable="on" disabled="disabled"><i class="fa fa-youtube-play"></i></button><div id="toolbarWC" style="display:block; min-width:100px;" class="btn btn-default ng-scope" name="wordcount" ta-button="ta-button" ng-disabled="isDisabled()" tabindex="-1" ng-click="executeAction()" ng-class="displayActiveToolClass(active)" unselectable="on" disabled="disabled">Words: <span ng-bind="wordcount" class="ng-binding">0</span></div><div id="toolbarCC" style="display:block; min-width:120px;" class="btn btn-default ng-scope" name="charcount" ta-button="ta-button" ng-disabled="isDisabled()" tabindex="-1" ng-click="executeAction()" ng-class="displayActiveToolClass(active)" unselectable="on" disabled="disabled">Characters: <span ng-bind="charcount" class="ng-binding">0</span></div></div></div><div class="ta-scroll-window ng-scope ta-text ta-editor border-around" ng-hide="showHtml"><div class="popover fade bottom" style="max-width: none; width: 305px;"><div class="arrow"></div><div class="popover-content"></div></div><div class="ta-resizer-handle-overlay"><div class="ta-resizer-handle-background"></div><div class="ta-resizer-handle-corner ta-resizer-handle-corner-tl"></div><div class="ta-resizer-handle-corner ta-resizer-handle-corner-tr"></div><div class="ta-resizer-handle-corner ta-resizer-handle-corner-bl"></div><div class="ta-resizer-handle-corner ta-resizer-handle-corner-br"></div><div class="ta-resizer-handle-info"></div></div><div id="taTextElement2840683748945594" contenteditable="true" ta-bind="ta-bind" ng-model="html" class="ng-pristine ng-untouched ng-valid ta-bind"><br><h5>Put your song here!<br><br><br><br><br><br><br><br><br><br><br><br></h5> </div></div><textarea bordercolor = "blue"  border-style= solid border-color #000000; border-width 1px id="taHtmlElement2840683748945594" ng-show="showHtml" ta-bind="ta-bind" ng-model="html" class="ng-pristine ng-untouched ng-valid ng-scope ta-bind ta-html ta-editor border-around ng-hide"></textarea><input type="hidden" tabindex="-1" style="display: none;" name="demo-editor" value="<br><br><br><br><br><br>"></div>
                </div>
            </div>



            <a href="#" class="btn btn-default">Submit Song</a>
            <footer class="row">
                <div class="col-sm-12 text-center">
                    <p>Created by <a href="https://www.linkedin.com/in/austinanderson1" target="_blank">fraywing</a></p>
                    <p>2013 Licensed under <a href="http://opensource.org/licenses/MIT" target="_blank">MIT</a></p>
                </div>
            </footer>
        </div>

        <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js" type="text/javascript"></script>
        <script src="dist/textAngular-rangy.min.js" type="text/javascript"></script>
        <script src="dist/textAngular-sanitize.min.js" type="text/javascript"></script>
        <script src="dist/textAngular.min.js" type="text/javascript"></script>
        <script src="js/demo.js" type="text/javascript"></script>


    </div><input id="textAngular-editableFix-010203040506070809" class="ta-hidden-input" aria-hidden="true" unselectable="on" tabindex="-1"></body>
    <br>

@endsection