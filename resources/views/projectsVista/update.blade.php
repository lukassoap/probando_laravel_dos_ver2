<html lang="en">
    <body>
        <div class="container text-center">
            <div class="row">
                <br/>



                <form action="{{ route('project.update', $proyecto->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-default">Id</span>
                        <input type="text" name="id" id = "id" class="form-control" value="{{ $proyecto->id }}"
                        aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="title">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text"> id="inputGroup-sizing-default">Titulo</span>
                        <input type="titulo" name="id" id = "id" class="form-control" value="{{ $proyecto->id }}"
                        aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="title">


                        <textarea name="description" id="description" class="form-control" 
                        aria-label="With textarea"></textarea>
                    </div>
                    <div class="input-group"> // estoes un comentario
                        <span class="input-group-text" id="inputGroup-sizing-default">Fecha de inicio</span>
                        <input type="date" class="form-control" aria-label="Sizing example input" 
                        aria-describedby="inputGroup-sizing-default" name="start_date">



                    <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
