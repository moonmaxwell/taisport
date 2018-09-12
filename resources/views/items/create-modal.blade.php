<!-- Modal -->
<div class="modal fade" id="items-create-modal" tabindex="-1" role="dialog" aria-labelledby="items-create-modalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="items-create-modal">Create Item</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body bg-success">
        <form method="POST" action="/items">
          {{ csrf_field() }}

          <div class="form-group">
            <input type="text" name="code" placeholder="Code" class="form-control" required="">
          </div>

          <div class="form-group">
            <input type="text" name="name" placeholder="Name" class="form-control" required="">
          </div>

          <div class="form-group">
            <input type="number" name="price" placeholder="Price" class="form-control" required="">
          </div>

          <div class="form-check">
            <input class="form-check-input" type="radio" name="currency" id="currency" value="kyat" checked>
            <label class="form-check-label" for="currency">
              Kyat
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="currency" id="currency2" value="yuan">
            <label class="form-check-label" for="currency2">
              Yuan
            </label>
          </div>

          <div class="form-group">
            <button type="submit" class="btn btn-primary float-right">Add</button>
          </div>
        </form>
      </div>
      
    </div>
  </div>
</div>
<script type="text/javascript" src="/js/radioCurrencyBgColor.js"></script>