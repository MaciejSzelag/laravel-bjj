
<section class="dashboard-prices-wrap d-updateContent">
    @include('pages.admin.dashboard.head',[$titleDashboad= "Prices"])
    <div class="update_content_wrap">
        <div class="form-content">
            <div class="content-box">
                <h1 class="h1-price">Main</h1>
                <h2 class="h2-price">Adults and Juniors ( age 12+ )</h2>
                <div class="new_value">
                    <table>
                        <tr>
                            <th>Plan name </th>
                            <th>Description</th>
                            <th>Price</th>
                            <th>Frequency</th>
                            <th>action</th>
                            <th>Last updates</th>
                        </tr>             
                         @foreach ($adults as $adult)
                        <tr class="tr-main">
                            <td>
                                {{$adult->plan_name}}
                            </td>
                            <td>
                                {{$adult->description}}
                            </td>
                            <td>
                               £{{$adult->price}}
                            </td>
                            <td>
                                {{$adult->frenquency}}
                            </td>
                            <td class="action-btn"><button class="edit-btn"><a href="{{route('admin.updatePrices',['id'=> $adult->id])}}">Update</a></button></td>
                            <td>
                                {{$adult->updated_at}}
                            </td>
                                
                        </tr>
                         @endforeach 
                    </table>
            </div>
            </div>
            <div class="content-box">
                <h1 class="h1-price">Private</h1>
                <h2 class="h2-price">
                   Private lessons with Black Belt Coaches Ian or Amy Harrop
                </h2>
                <div class="new_value">
                   
                    <table>
                        <tr>
                            <th>Plan name </th>
                            <th>Description</th>
                            <th>Price</th>
                            <th>Frequency</th>
                            <th>action</th>
                            <th>Last updates</th>
                        </tr>

              
                        @foreach ($privates as $private)
                            <tr class="tr-priv">
                                <td>
                                    {{$private->plan_name}}
                                </td>
                                <td>
                                    {{$private->description}}
                                </td>
                                <td>
                                £{{$private->price}}
                                </td>
                                <td>
                                    {{$private->frenquency}}
                                </td>
                                <td class="action-btn"><button class="edit-btn"><a href="{{route('admin.updatePrices',['id'=> $private->id])}}">Update</a></button></td>
                                <td>
                                    {{$private->updated_at}}
                                </td>
                                    
                            </tr>
                        @endforeach 
                    </table>
                </div>
            </div>
            <div class="content-box">
                <h1 class="h1-price">Kids</h1>
                <h2 class="h2-price">Kids (age 7-11)</h2>
                <div class="new_value">
                   
                    <table>
                        <tr>
                            <th>Plan name </th>
                            <th>Description</th>
                            <th>Price</th>
                            <th>Frequency</th>
                            <th>action</th>
                            <th>Last updates</th>
                        </tr>

              
                         @foreach ($kids as $kid)
                        <tr class="tr-kids">
                            <td>
                                {{$kid->plan_name}}
                            </td>
                            <td>
                                {{$kid->description}}
                            </td>
                            <td>
                               £{{$kid->price}}
                            </td>
                            <td>
                                {{$kid->frenquency}}
                            </td>
                            <td class="action-btn"><button class="edit-btn"><a href="{{route('admin.updatePrices',['id'=> $kid->id])}}">Update</a></button></td>
                            <td>
                                {{$kid->updated_at}}
                            </td>
                                
                        </tr>
                         @endforeach 
                    </table>
            </div> 
        </div>
    </div>
</section>