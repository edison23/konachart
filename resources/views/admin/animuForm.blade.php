
<!-- This should be somewhere else -->
<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script>
    $(function() {
        var id = 0;
        $("#addLink").click(function ()
        {
            // id++;
            var form = '{!! Form::select("linksel", $sites) !!} {!! Form::input("link", null) !!}<br>'
            $("#links").append(form);
        })
    });
</script>


{!! Form::label('Jmeno') !!}
{!! Form::text('title', null) !!}
<br>
{!! Form::label('Studio') !!}
{!! Form::text('studio', null) !!}
<br>
{!! Form::label('Popis') !!}
{!! Form::text('description', null) !!}
<br>
<div id="links">
{!! Form::label('Odkazy') !!}
{!! Form::select('linksel-1', $sites) !!}
{!! Form::input('link-1', null) !!}
<br>
</div>
<a href="#" id="addLink">Add Another Link</a>
<br>
{!! Form::label('Obrazek') !!}
{!! Form::text('image', null) !!}
<br>
{!! Form::submit('Save') !!}
