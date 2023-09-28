<div>
    <div style="display: flex;">
        <div style="margin-left: 10%;">
            <p style="font-size: 18px;">{{ucwords($teacher_name)}}</p>
        </div>
        <div style="margin-left: 64%;">
            <div class="dropdown">
                <a class="btn btn-info dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fa-solid fa-sort" style="font-size: 19px; cursor: pointer;"></i>
                    Sort
                </a>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <li><a class="dropdown-item" wire:click="clickSort1('item_name')" style="cursor: pointer;">Name @if($sort1 == "item_name") <b style="font-size: 30px; margin-left: 3%;">&middot;</b> @endif</a></li>
                    <li><a class="dropdown-item" wire:click="clickSort1('created_at')" style="cursor: pointer;">Date @if($sort1 == "created_at") <b style="font-size: 30px; margin-left: 3%;">&middot;</b> @endif</a></li>
                    <hr>
                    <li><a class="dropdown-item" wire:click="clickSort2('asc')" style="cursor: pointer;">Ascending @if($sort2 == "asc") <b style="font-size: 30px; margin-left: 3%;">&middot;</b> @endif</a></li>
                    <li><a class="dropdown-item" wire:click="clickSort2('desc')" style="cursor: pointer;">Descending @if($sort2 == "desc") <b style="font-size: 30px; margin-left: 3%;">&middot;</b> @endif</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div style="display: flex; width: 100%;">
        <div style="width: 80%; margin-left: 10%;">
            <table class="table table-hover" style="width: 100%; text-align: center">
                <thead>
                <tr class="inv">
                    <th>
                        Deployed Item
                    </th>
                    <th>
                        Qty
                    </th>
                    <th>
                        Unit
                    </th>
                    <th>
                        Serial
                    </th>
                    <th>
                        Date
                    </th>
                </tr>
                </thead>
                <tbody>
                @foreach($deployed_data as $data)
                    @if($data->quantity < 1)

                    @elseif($data->item_type == "consumable")
                    @else
                        <tr style="cursor: pointer">
                            <td>
                                {{$data->item_name}}
                            </td>
                            <td>
                                @if($data->quantity > 0)
                                    {{$data->quantity}}
                                @endif
                            </td>
                            <td>
                                {{$data->unit}}
                            </td>
                            <td>
                                {{$data->serial}}
                            </td>
                            <td>
                                {{$data->created_at}}
                            </td>
                        </tr>
                    @endif
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
