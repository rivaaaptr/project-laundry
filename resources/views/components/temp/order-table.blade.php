<div class="overflow-x-auto">
    <table class="table">
      <!-- head -->
      <thead>
        <tr>
          <th></th>
          <th>order name</th>
          <th>order date</th>
          <th>shoes count</th>
          <th>price</th>
        </tr>
      </thead>
      <tbody>
        <!-- row 1 -->
        @foreach ($orders as $order)
        <tr class="hover">
          <th>{{$order->id}}</th>
          <td> {{$order->user()->name}}</td>
          <td>{{$order->order_date}}</td>
          <td>{{$order->shoes_count}}</td>
          <td>{{$order->price}}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>