<html lang="en">
    <body>
        <div class="container text-center">
            <div class="row">
                <br/>



                <form action="{{ route('project.store') }}" method="post">
                    @csrf
                    @method('POST')
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-default">Titulo</span>
                        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="title">
                    </div>
                    <div class="input-group">
                        <span class="input-group-text">Descripcion</span>
                        <textarea name="description" id="description" class="form-control" aria-label="With textarea"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    </form>


















                    
