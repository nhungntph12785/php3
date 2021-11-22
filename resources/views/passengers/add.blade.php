<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<div class="container">
    <form action="" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                  <label for="">name</label>
                  <input type="text" name="name" class="form-control" placeholder="">
                </div> <div class="form-group">
                    <label for="">car</label>
                    <select name="cate_id" class="form-control">
                        @foreach ($cars as $item)
                            <option value="{{$item->id}}">{{$item->name}}</option>
                        @endforeach
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="">travel_time</label>
                    <input type="text" name="travel_time" class="form-control" placeholder="">
                  </div>
                <div class="form-group">
                    <label for="">avatar</label>
                    <input type="file" name="avatar" class="form-control" placeholder="">
                </div>
            </div>            
            <div class="col-12 d-flex justify-content-end">
                <br>
                <a href="{{route('passenger.index')}}" class="btn btn-danger">Hủy</a>
                &nbsp;
                <button type="submit" class="btn btn-primary">Lưu</button>
            </div>
        </div>
    </form>
</div>