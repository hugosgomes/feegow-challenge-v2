<!DOCTYPE html>
<html>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>teste</title>
        <link rel="stylesheet" href="{{asset('css/style.css')}}" />
        <link rel="js" href="{{asset('js/func.js')}}" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
            integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css?family=Raleway:500i|Roboto:300,400,700|Roboto+Mono" rel="stylesheet">
    </head>

    <body class="home">
        <div class="alert alert-success alert-dismissible fade show" role="alert" style="display:none">
            <strong>Holy guacamole!</strong> You should check in on some of those fields below.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-2"></div>
                <nav class="navbar navbar-expand-lg navbar-light bg-light col-8">
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item">
                            <form class="form-inline my-2 my-lg-0">
                                <label>Consulta de:&nbsp;</label>
                                <select class="form-control mr-sm-2" id="speciality_id">
                                    <option value="">Selecione a Especialidade</option>
                                    @foreach ($specialtiesList->content as $specialtie)
                                        <option value="{{$specialtie->especialidade_id}}">{{$specialtie->nome}}</option>
                                    @endforeach
                                </select>
                                <button class="btn btn-success my-2 my-sm-0 btn_1 rounded" type="button" id="btnAgendar">BUSCAR</button>
                            </form>
                            <li>
                        </ul>
                    </div>
                </nav>
                <div class="col-2"></div>
            </div>
            <br>

            <div class="row">
                    <div class="col-sm-4">
                        <div class="panel panel-primary border-0">
                            <div class="panel-body">
                                <h4>Dra. Fabrício - Qualidade</h4>
                                <br>CRM <br>
                                <button type="button" class="btn btn-info agendar" data-toggle="modal" data-target="#myModal" id-medico="83">AGENDAR</button>
                            </div>
                        </div>
                    </div>
                <!--card-->
                <div class="col-3">
                    <div class="user-profile">
                        <img class="avatar" src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iTGF5ZXJfMSIgeD0iMHB4IiB5PSIwcHgiIHZpZXdCb3g9IjAgMCA1MTIgNTEyIiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCA1MTIgNTEyOyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSIgd2lkdGg9IjUxMnB4IiBoZWlnaHQ9IjUxMnB4Ij4KPGNpcmNsZSBzdHlsZT0iZmlsbDojRUNGMEYxOyIgY3g9IjI1NiIgY3k9IjI1NiIgcj0iMjU2Ii8+CjxjaXJjbGUgc3R5bGU9ImZpbGw6I0ZBRDI0RDsiIGN4PSIyNTYiIGN5PSIyNTYiIHI9IjI1NiIvPgo8cGF0aCBzdHlsZT0iZmlsbDojRjBCQTdEOyIgZD0iTTIyOC41NDYsMjM4LjYyOWwtNi45NTcsMzQuOTU1bC0yMy4zMDcsOC4wMTZsMTMuNzkzLDIxNy41OTRsODguNjgyLTAuNTAzbDQuMTQyLTIyMS4yMDEgIGwtMTQuODg1LTQuNjgzbC03LjU4Ni0zNS42NTlMMjI4LjU0NiwyMzguNjI5TDIyOC41NDYsMjM4LjYyOXoiLz4KPHBhdGggc3R5bGU9ImZpbGw6IzIxRDBDMzsiIGQ9Ik0xOTIuOTkyLDM0Mi4zMWMzOC44MDEsMTguODEyLDc4LjcxNSwyMi43NjEsMTIwLjczMiwxLjA2NWwtMS40MzIsMTYyLjQwMiAgQzI5NC4xNzYsNTA5Ljg0LDI3NS4zNDEsNTEyLDI1Niw1MTJjLTIyLjI1NiwwLTQzLjg0Ni0yLjg0NC02NC40MzItOC4xODJMMTkyLjk5MiwzNDIuMzF6Ii8+CjxwYXRoIHN0eWxlPSJmaWxsOiNFRUYzRjc7IiBkPSJNMjk3LjQ5OSwyNzUuNDcxbDY3LjU5MiwxOC40MzRjMTcuNTI3LDUuNDExLDMzLjE4OCwxNS43NzUsMzMuNjg5LDM0LjRsMy43MDcsMTM3LjY0OSAgYy0xNS40MDQsMTAuNzY4LTMyLjA0OCwxOS44NzYtNDkuNjc0LDI3LjA4NWwtNC4zMTQtNzYuMTI1bC0xMS44MzcsODIuMTA0QzMxMS4zMDQsNTA3LjQzOSwyODQuMTg2LDUxMiwyNTYuMDAxLDUxMiAgYy0wLjczNiwwLTEuNDY2LTAuMDIyLTIuMjAxLTAuMDI4bC0wLjAyOC02OS43ODdMMjk3LjQ5OSwyNzUuNDcxeiIvPgo8Zz4KCTxwYXRoIHN0eWxlPSJmaWxsOiNGRkZGRkY7IiBkPSJNMjk2Ljg1NSwyNzQuOTkzbDguOTA3LDMuNTkzbDMwLjM4Myw0NS42MTJsLTM1LjYxMy0wLjU3M2wyMi4wNzQsMTEuODEybC02OC44MzMsMTA2Ljc0OSAgIEwyOTYuODU1LDI3NC45OTNMMjk2Ljg1NSwyNzQuOTkzeiIvPgoJPHBhdGggc3R5bGU9ImZpbGw6I0ZGRkZGRjsiIGQ9Ik0yMTguNDI0LDI3NC43NzRsLTY3LjkwNywxNy4yMzljLTE3LjYyMiw1LjEwMy0zMy40NiwxNS4xODgtMzQuMjkxLDMzLjgwMWwtNi4yNjIsMTQwLjQ1MyAgIGMxNS4yNjksMTAuNjI1LDMxLjc1LDE5LjYyNCw0OS4xOTMsMjYuNzYybDUuNzgtNzcuNzMybDEwLjU3NSw4My43NzljMjQuNjQ3LDguMTYzLDUwLjk1NiwxMi42NjYsNzguMjg3LDEyLjg5N2wtMC4wMjgtNjkuNzg3ICAgTDIxOC40MjQsMjc0Ljc3NEwyMTguNDI0LDI3NC43NzR6Ii8+CjwvZz4KPHBhdGggc3R5bGU9ImZpbGw6I0VFRjNGNzsiIGQ9Ik0yMTkuMDc2LDI3NC4zMDZsLTEwLjYyLDQuMDY4bC0yOS41Myw0NC40MzdsMzUuNjE5LDAuMDU3bC0yMi4yOCwxMS40Mmw2MS41MDgsMTA3Ljg5NyAgTDIxOS4wNzYsMjc0LjMwNkwyMTkuMDc2LDI3NC4zMDZ6Ii8+CjxwYXRoIHN0eWxlPSJmaWxsOiNGRUQyOTg7IiBkPSJNMTgyLjU3OCwxNTQuODAxYy0xLjEzNSwxMS40NTYsMS4xNTksMzYuODkyLDE1LjA1NiwzNS45MjRjMCwwLDIwLjAwMiw1OC4yOTUsNTguNTExLDY0Ljg5NiAgYzMzLjI0Ni02LjA3NSw1My40Ny01OC44NzMsNTUuMDA1LTYzLjg5NmM0LjU3OSwxLjU2NCwxNy4zOTYtMTkuNzU2LDcuNTcxLTM3LjE5OGMtMi44MTgtNS4wMDItMTAuNzk1LTAuOTUyLTEwLjc5NS0wLjk1MiAgbC0wLjYxNC0xNC41NjVjLTUyLjUzNiw1LjEwMi04NS4yOTYtNDUuNzExLTg1LjI5Ni00NS43MTFjLTIwLjAyNywyMS43ODUtMjQuODQ1LDM0LjIxOS0yNi45ODcsNjEuMzE0YzAsMC0zLjc2MS0yLjMzNS03LjkzNi0yLjQyNCAgQzE4NS44MzUsMTUyLjE2MSwxODQuMjIxLDE1My4yNTcsMTgyLjU3OCwxNTQuODAxTDE4Mi41NzgsMTU0LjgwMXoiLz4KPHBhdGggc3R5bGU9ImZpbGw6IzY2NjY2NjsiIGQ9Ik0yMjEuNTg4LDI3My41ODRsNi44MDUtMzQuMTc1Yy0xOS43MTMtMTkuNDA5LTI5Ljk5Mi00OC42ODQtMjkuOTkyLTQ4LjY4NCAgYy0xMy40MzIsMS40OTgtMTguODI2LTM1LjUyMS05Ljc4OS0zNi44MTRjNC4xMzMtMC41OTIsNi45LDAuNzAzLDYuOSwwLjcwM2MyLjAzNS0yOC42MDgsNy41NDUtMzcuMzA3LDI2LjUwMy02MS4zMTQgIGMwLDAsMzMuMTE4LDU1LjcyLDg1LjYxMyw1MC42MTdsMC43NTEsMTIuMDE0YzIuNDgyLTIuNDQsNy4wMTktNC43MzMsMTAuNzk5LDEuNDg0YzYuMTUsMTAuMTE1LTEuODk1LDMzLjEwMy05LjM0MywzNC41MDYgIGMtMS4wNTUsMy41NDQtOS4zNDQsMjkuNjk1LTI2LjkwMSw0Ny42MTVsNy4wNzksMzMuMjczYzE5LjY5OSw2LjM3OSwzOC42OTIsMTEuMzA2LDU3Ljc1NywxNi4zNzUgIGMtOS42ODUtNTkuMDM4LTE1LjIzNS0xMjIuOTI0LTI2Ljc5OS0xNzcuNDU4Yy0xMS4wOTgtNTIuMzMxLTcxLjc2NS02Ni45NjctMTA2LjY1Mi00My43MjZjMCwwLTMwLjA4MiwxMi4xMjEtMzUuNTc0LDUyLjMyICBjLTUuNDksNDAuMTk3LTMuMzg5LDQ0LjA3MS0zLjM4OSw0NC4wNzFsLTkuNjkzLDEyMy43NzlDMTgzLjYzNiwyODMuNjA3LDIwNC40NDcsMjc5LjQ3OCwyMjEuNTg4LDI3My41ODRMMjIxLjU4OCwyNzMuNTg0eiIvPgo8cGF0aCBzdHlsZT0iZmlsbDojRkVGRUZFOyIgZD0iTTM0OC41MjcsNDE4LjkxNGMtOS45ODktMS43MjUtMTYuNjktMTEuMjIyLTE0Ljk2Ni0yMS4yMTJjMS43MjUtOS45ODgsMTEuMjIzLTE2LjY5MiwyMS4yMTItMTQuOTY4ICBjOS45OTEsMS43MjUsMTYuNjkxLDExLjIyNSwxNC45NjcsMjEuMjE2QzM2OC4wMTUsNDEzLjkzOSwzNTguNTE3LDQyMC42MzksMzQ4LjUyNyw0MTguOTE0eiIvPgo8cGF0aCBzdHlsZT0iZmlsbDojMEY3OTg2OyIgZD0iTTM0OC43MDksNDE3Ljg2Yy05LjQwOC0xLjYyNS0xNS43MTktMTAuNTY2LTE0LjA5NC0xOS45NzVjMS42MjUtOS40MDksMTAuNTY4LTE1LjcyMSwxOS45NzgtMTQuMDk2ICBjOS40MDksMS42MjYsMTUuNzE4LDEwLjU3MSwxNC4wOTQsMTkuOTc5QzM2Ny4wNiw0MTMuMTc3LDM1OC4xMTksNDE5LjQ4NSwzNDguNzA5LDQxNy44NnoiLz4KPHBhdGggc3R5bGU9ImZpbGw6I0VCRUNFQzsiIGQ9Ik0zNTAuMDIyLDQxMC4yNTNjLTUuMjAzLTAuODk4LTguNjk3LTUuODUxLTcuNzk4LTExLjA1NGMwLjg5OC01LjIwNyw1Ljg0OS04LjY5NiwxMS4wNTItNy43OTggIGM1LjIwNywwLjg5OSw4LjY5OCw1Ljg0Niw3Ljc5OSwxMS4wNTNDMzYwLjE3OCw0MDcuNjU4LDM1NS4yMjksNDExLjE1MSwzNTAuMDIyLDQxMC4yNTNMMzUwLjAyMiw0MTAuMjUzeiIvPgo8cGF0aCBzdHlsZT0iZmlsbDojRkVGRUZFOyIgZD0iTTM1MS4xNDcsMzkyLjQyNWw0LjIwNCwwLjcyNWwyLjI2LTEzLjA5bC00LjIwMi0wLjcyNUwzNTEuMTQ3LDM5Mi40MjVMMzUxLjE0NywzOTIuNDI1eiIvPgo8cGF0aCBzdHlsZT0iZmlsbDojMjFEMEMzOyIgZD0iTTIxMC4zNzIsNDIyLjU0Nmw3Ljg3Ny0xLjU2M2MzLjM0Ni0wLjY2NSw2LjExOS0yLjYzNiw3Ljg4Ni01LjI3OSAgYzEuNzY1LTIuNjQzLDIuNTMyLTUuOTU3LDEuODY2LTkuMzA0bC05LjI2Mi00Ni42NjhjLTMuNDk2LTE3LjYxLTE3LjI3My0yNi41OTEtMzMuMDE2LTI4LjU4MSAgYy02LjAzMy0wLjc2NC0xMi4zNTctMC40ODYtMTguNDgzLDAuNzI5Yy02LjEzMSwxLjIxMi0xMi4wNzUsMy4zNy0xNy4zNTYsNi4zNzhjLTEzLjc1NCw3LjgzMy0yMy4wMjQsMjEuMzc4LTE5LjUyMiwzOS4wMTcgIGw5LjI2Miw0Ni42NjljMC42NjUsMy4zNDYsMi42MzksNi4xMTcsNS4yOCw3Ljg4NWwwLjAwNi0wLjAwMmMyLjY0NCwxLjc2OSw1Ljk1NCwyLjUzMiw5LjI5OSwxLjg2OGw3Ljg3Mi0xLjU2M2wtMC42NDQtMy4yNDUgIGwtNy44NzQsMS41NjNjLTIuNDU0LDAuNDg3LTQuODg2LTAuMDc0LTYuODIyLTEuMzY3bDAuMDAxLTAuMDAxYy0xLjkzOC0xLjI5OS0zLjM4Ni0zLjMzMS0zLjg3NC01Ljc4MWwtOS4yNjItNDYuNjY5ICBjLTMuMTc3LTE2LjAwNSw1LjMxNy0yOC4zNDEsMTcuOTAyLTM1LjUwNGM0Ljk3My0yLjgzNCwxMC41ODMtNC44NjgsMTYuMzczLTYuMDE3YzUuNzg5LTEuMTQ3LDExLjc1Mi0xLjQwNiwxNy40MzQtMC42ODkgIGMxNC40MDgsMS44MjEsMjcuMDA5LDkuOTgyLDMwLjE3OCwyNS45NTZsOS4yNjUsNDYuNjY5YzAuNDg2LDIuNDUyLTAuMDc4LDQuODgxLTEuMzcyLDYuODIyYy0xLjI5NywxLjkzNi0zLjMzMSwzLjM4NC01Ljc4MywzLjg2OSAgbC03Ljg3NiwxLjU2M0wyMTAuMzcyLDQyMi41NDZMMjEwLjM3Miw0MjIuNTQ2eiIvPgo8cGF0aCBzdHlsZT0iZmlsbDojNEQ0RDREOyIgZD0iTTIyMS4yMzUsMzY2LjY0OGwtMS40MTUtNy4xMjljLTMuNjAyLTE4LjE1Ny0xNy43NzctMjcuNDEtMzMuOTYzLTI5LjQ1OCAgYy02LjE0OC0wLjc3NS0xMi41ODktMC40OTktMTguODMsMC43NDFjLTYuMjQzLDEuMjM2LTEyLjMsMy40MzYtMTcuNjgyLDYuNDk4Yy0xNC4xNDYsOC4wNTctMjMuNjczLDIyLjAwMy0yMC4wNjUsNDAuMTkgIGwxLjQxNyw3LjEyOWw1LjQwNS0xLjA3NWwtMS40MTUtNy4xMjhjLTMuMDY3LTE1LjQ1OCw1LjE2OC0yNy4zOTIsMTcuMzYyLTM0LjMzN2M0Ljg3NC0yLjc3NCwxMC4zNjktNC43NjYsMTYuMDQ3LTUuODkyICBjNS42NzYtMS4xMjcsMTEuNTIxLTEuMzgsMTcuMDg4LTAuNjc3YzEzLjk2MiwxLjc2NCwyNi4xNjcsOS42NTIsMjkuMjMxLDI1LjA4MWwxLjQxNCw3LjEyOUwyMjEuMjM1LDM2Ni42NDhMMjIxLjIzNSwzNjYuNjQ4eiIvPgo8Zz4KCTxwYXRoIHN0eWxlPSJmaWxsOiMwNzY2NzM7IiBkPSJNMTU1LjgzNiw0MzQuMDgybDQuMjEzLTAuODM3YzEuMDU3LDEuMTg3LDIuNjk0LDEuNzk3LDQuMzYyLDEuNDY2ICAgYzIuNTA3LTAuNDk3LDQuMTM2LTIuOTMyLDMuNjM4LTUuNDQxYy0wLjQ5Ni0yLjUwNC0yLjkzMS00LjEzNC01LjQzOC0zLjYzNWMtMS42NzEsMC4zMzEtMi45NSwxLjUyMi0zLjQ3MiwzLjAyMWwtNC4yMTIsMC44MzUgICBMMTU1LjgzNiw0MzQuMDgyeiIvPgoJPHBhdGggc3R5bGU9ImZpbGw6IzA3NjY3MzsiIGQ9Ik0yMTMuNzIsNDIyLjU5M2wtNC4yMSwwLjgzN2MtMC41MjMsMS40OTgtMS44MDIsMi42ODktMy40NzEsMy4wMiAgIGMtMi41MDYsMC40OTYtNC45NC0xLjEzMi01LjQzOC0zLjY0Yy0wLjQ5Ni0yLjUwNCwxLjEzMi00Ljk0LDMuNjM3LTUuNDM3YzEuNjY5LTAuMzMxLDMuMzA4LDAuMjgxLDQuMzYxLDEuNDY2bDQuMjEyLTAuODM3ICAgTDIxMy43Miw0MjIuNTkzTDIxMy43Miw0MjIuNTkzeiIvPgo8L2c+CjxwYXRoIHN0eWxlPSJmaWxsOiM2NjY2NjY7IiBkPSJNMTY5LjU5LDMzMC4zNzlsLTEuNjA3LTguMDk3bC0zLjE5NSwwLjYzNmwtMy4xOSwwLjYzMmwxLjYyNSw4LjE3NiAgYzEuMjE3LTAuMzU2LDIuNDQ5LTAuNjU3LDMuNjkzLTAuOTAzQzE2Ny44MDIsMzMwLjY0NiwxNjguNjk0LDMzMC40OTksMTY5LjU5LDMzMC4zNzl6Ii8+CjxnPgoJPHBhdGggc3R5bGU9ImZpbGw6IzBGNzk4NjsiIGQ9Ik0xNjIuNjk3LDQyOS41NzdjMC43Ni0wLjE1MSwxLjI1MS0wLjg5LDEuMS0xLjY0NWMtMC4xNS0wLjc1OS0wLjg4NS0xLjI1My0xLjY0NS0xLjEwMiAgIGMtMC43NiwwLjE1MS0xLjI1MSwwLjg4Ny0xLjEwMSwxLjY0NkMxNjEuMjAyLDQyOS4yMzMsMTYxLjkzOCw0MjkuNzI4LDE2Mi42OTcsNDI5LjU3N0wxNjIuNjk3LDQyOS41Nzd6Ii8+Cgk8cGF0aCBzdHlsZT0iZmlsbDojMEY3OTg2OyIgZD0iTTIwNC4zNTEsNDIxLjI5NWMwLjc1Ny0wLjE1LDEuMjQ5LTAuODg3LDEuMDk4LTEuNjQzYy0wLjE1MS0wLjc2LTAuODg1LTEuMjUzLTEuNjQ1LTEuMTAzICAgYy0wLjc2LDAuMTUxLTEuMjUxLDAuODg3LTEuMSwxLjY0OEMyMDIuODUzLDQyMC45NTIsMjAzLjU5LDQyMS40NDUsMjA0LjM1MSw0MjEuMjk1eiIvPgo8L2c+CjxwYXRoIHN0eWxlPSJmaWxsOiNGRUZFRkU7IiBkPSJNMzQ5LjUxMSw0MTAuMTY0Yy00LjkyMy0wLjg1LTguMjI0LTUuNTMxLTcuMzc1LTEwLjQ1NWMwLjg1LTQuOTIxLDUuNTI4LTguMjIzLDEwLjQ1Mi03LjM3NCAgYzQuOTIyLDAuODUsOC4yMjUsNS41MjksNy4zNzYsMTAuNDUxQzM1OS4xMTQsNDA3LjcxMSwzNTQuNDMzLDQxMS4wMTQsMzQ5LjUxMSw0MTAuMTY0eiIvPgo8Zz4KCTxwYXRoIHN0eWxlPSJmaWxsOiM0RDRENEQ7IiBkPSJNMjA4LjU2MywyNzguNTYzYy0wLjE0MiwwLjAwMS00OS44NjIsMC40MTQtNDEuNDYzLDQzLjkxMmwtNC42MjMsMC44ODQgICBjLTkuNDY4LTQ5LjAzOCw0NS44NzQtNDkuNDksNDYuMDMyLTQ5LjQ5MkwyMDguNTYzLDI3OC41NjNMMjA4LjU2MywyNzguNTYzeiIvPgoJPHBhdGggc3R5bGU9ImZpbGw6IzRENEQ0RDsiIGQ9Ik0zMDcuNzc1LDI3NC4wOTFjOC4xMTEsMC4yMTgsMjMuNzk0LDIuNDI5LDM1Ljg2MSwxNy4xMTEgICBjMTEuODExLDE0LjM2NywyMC4wOTEsNDAuNzUyLDEzLjg5OSw4OS4xMjhsLTQuNjYxLTAuNTljNS45OTMtNDYuODIzLTEuNzUxLTcyLjAzMS0xMi44NjYtODUuNTU0ICAgYy0xMC44Ni0xMy4yMTEtMjUuMDE5LTE1LjIwMi0zMi4zNDQtMTUuMzk5TDMwNy43NzUsMjc0LjA5MUwzMDcuNzc1LDI3NC4wOTF6Ii8+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPC9zdmc+Cg==" />
                        <div class="username">Dra. Maria</div>
                        <div class="descript">CRM 1122334455</div>
                        <button class="btn btn-success my-2 my-sm-0 btn_1 rounded btnAgendar" type="button">AGENDAR</button>
                    </div>
                </div>
                <!--fim card-->
                <!--card-->
                <div class="col-3">
                    <div class="user-profile rounded border-0">
                        <img class="avatar"
                            src="https://image.flaticon.com/icons/svg/387/387561.svg" alt="Doctor free icon" title="Doctor free icon">
                        <div class="username">Dr. José</div>
                        <div class="descript">CRM 1122334455</div>
                        <button class="btn btn-success my-2 my-sm-0 btn_1 roundedbtnAgendar" type="button">AGENDAR</button>
                    </div>
                </div>
                <!--fim card-->
                <!--card-->
                <div class="col-3">
                    <div class="user-profile rounded border-0">
                        <img class="avatar"
                            src="https://image.flaticon.com/icons/svg/387/387561.svg" alt="Doctor free icon" title="Doctor free icon">
                        <div class="username">Dr José</div>
                        <div class="descript">CRM 1122334455</div>
                        <button class="btn btn-success my-2 my-sm-0 btn_1 rounded btnAgendar" type="button">AGENDAR</button>
                    </div>
                </div>
                <!--fim card-->
            </div>
            <br>
            <div class="row" style="display:none;">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="card" id="card_form">
                        <div class="card-body">
                            <h3>Preencha seus dados</h3>
                            <form>
                                <div class="row">
                                    <div class="col-sm-12 col-md-3 col-lg-3 col-xl-3">
                                        <div class="form-group">
                                            <label for="nomeField">Nome completo:</label>
                                            <input type="text" class="form-control" id="nomeField" placeholder="Ex: José Silva">
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-3 col-lg-3 col-xl-3">
                                        <div class="form-group">
                                            <label for="nomeField">Como conheceu?</label>
                                            <select type="text" class="form-control" id="comoConheceuField">
                                                <option value="">Como conheceu?</option>
                                                @foreach ($pacientsListSource->content as $source)
                                                    <option value="{{$source->origem_id}}">{{$source->nome_origem}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    </div>
                                <div class="row">
                                    <div class="col-sm-12 col-md-3 col-lg-3 col-xl-3">
                                        <div class="form-group">
                                            <label for="nomeField">Nascimento:</label>
                                            <input type="text" class="form-control" id="nascimentoField" placeholder="Ex: 12/04/1995"
                                                data-mask="00/00/0000">
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-3 col-lg-3 col-xl-3">
                                        <div class="form-group">
                                            <label for="nomeField">CPF:</label>
                                            <input type="text" class="form-control" id="cpfField" placeholder="Ex: 123.456.789-22"
                                                data-mask="000.000.000-00">
                                        </div>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-primary" id="solicitarHorario">Solicitar horários</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
