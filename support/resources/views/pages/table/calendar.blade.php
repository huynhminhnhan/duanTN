@extends('layout.master')
@section('content')
      <div class="main-panel">
        <div class="content-wrapper">
          
          <div class="row">
            <div class="col-md-12 d-flex align-items-stretch grid-margin">
              <div class="row flex-grow">
                <div class="col-12">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">XEM LỊCH TRỰC</h4>
                      <div class="col-md-12 d-flex align-items-stretch grid-margin">
                        <form>
                        <div class="form-row">
                            <div class="form-group col-md-3">
                            <label for="inputState">Bộ phận</label>
                            <select id="inputState" class="form-control">
                                <option selected>...</option>
                                <option>...</option>
                            </select>
                            </div>
                            <div class="form-group col-md-4">
                            <label for="inputState">Nhân viên</label>
                            <select id="inputState" class="form-control">
                                <option selected>...</option>
                                <option>...</option>
                            </select>
                            </div>
                            <div class="form-group col-md-1 mr-2">
                            <label for="inputState">Tháng</label>
                            <select id="inputState" class="form-control">
                                <option selected>...</option>
                                <option>...</option>
                            </select>
                            </div>
                            <div class="form-group col-md-2">
                            <label for="inputState">Năm</label>
                            <select id="inputState" class="form-control">
                                <option selected>...</option>
                                <option>...</option>
                            </select>
                            </div>
                            <div class="form-group col-md-1 mt-4">
                            <button type="submit" class="btn btn-primary">GỬI</button>
                            </div>
                        </div>
                        </form>
                      
          </div>
          <table class="table table-bordered">
                            <thead>
                                <tr>
                                <th scope="col">Chủ nhật</th>
                                <th scope="col">Thứ hai</th>
                                <th scope="col">Thứ ba</th>
                                <th scope="col">Thứ tư</th>
                                <th scope="col">Thứ năm</th>
                                <th scope="col">Thứ sáu</th>
                                <th scope="col">Thứ bảy</th>
                                <th scope="col">Chủ nhật</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                <td>1</td>
                                <td>2</td>
                                <td>3</td>
                                <td>4</td>
                                <td>5</td>
                                <td>6</td>
                                <td>7</td>
                                <td>8</td>
                                </tr>
                                <tr>
                                <td>9</td>
                                <td>10</td>
                                <td>11</td>
                                <td>12</td>
                                <td>13</td>
                                <td>14</td>
                                <td>15</td>
                                <td>16</td>
                                </tr>
                                <tr>
                                <td>17</td>
                                <td>18</td>
                                <td>19</td>
                                <td>20</td>
                                <td>21</td>
                                <td>22</td>
                                <td>23</td>
                                <td>24</td>
                                </tr>
                                <tr>
                                <td>25</td>
                                <td>26</td>
                                <td>27</td>
                                <td>28</td>
                                <td>29</td>
                                <td>30</td>
                                <td>31</td>
                                <td></td>
                                </tr>
                            </tbody>
                            </table>          
                    </div>
                  </div>
                </div>
              </div>
            </div>
              
          </div>
          </div>
        
@endsection