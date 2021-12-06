{{-- Modal --}}
<div class="modal fade text-left" id="inlineForm" tabindex="-1" role="dialog"
  aria-labelledby="myModalLabel33" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel33">Prepare Cron Statement</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      {{-- {!! Form::open(['route' => 'backend.employees.importPositions', 'class' => 'form-horizontal', 'files' => true]) !!} --}}
        <div class="modal-body">
            <div class="row">
              <div class="col-12">
                <h3 class="text-center" v-text="humanReadable"></h3>
              </div>
            </div>
            <div class="row" style="margin: auto; width: 60%;">
                <div class="col-md-1 form-group"></div>
                <div class="col-md-2 form-group segments">
                    <label :class="{'bold_level': selectedField == 1}">Minute</label>
                    <input type="text" class="form-control segemnt-control" @click.prevent="selectedField = 1" v-model="minute" @change.prevent="cronSegmentChanged">
                </div>

                <div class="col-md-2 form-group segments">
                    <label :class="{'bold_level': selectedField == 2}">Hour</label>
                    <input type="text" class="form-control segemnt-control" @click.prevent="selectedField = 2" v-model="hour" @change.prevent="cronSegmentChanged">
                </div>

                <div class="col-md-2 form-group segments">
                    <label :class="{'bold_level': selectedField == 3}">Day(Month)</label>
                    <input type="text" class="form-control segemnt-control" @click.prevent="selectedField = 3" v-model="day_month" @change.prevent="cronSegmentChanged">
                </div>

                <div class="col-md-2 form-group segments">
                    <label :class="{'bold_level': selectedField == 4}">Month</label>
                    <input type="text" class="form-control segemnt-control" @click.prevent="selectedField = 4" v-model="month" @change.prevent="cronSegmentChanged">
                </div>

                <div class="col-md-2 form-group segments">
                    <label :class="{'bold_level': selectedField == 5}">Day(Week)</label>
                    <input type="text" class="form-control segemnt-control" @click.prevent="selectedField = 5" v-model="day_week" @change.prevent="cronSegmentChanged">
                </div>
            </div>

            <div class="row">
                <template v-for="(item,ind) in options[selectedField]">
                    <div class="col-md-6" style="text-align: right;"><strong>@{{ item.opt }}</strong></div>
                    <div class="col-md-6" v-text="item.desc"></div>
                </template>
            </div>

            <div class="row">
              <div class="col-12">
                <h4 class="text-center">OR</h4>
              </div>
            </div>
            <div class="row text-center">
              <div class="col-12">
                  <select id="frequency" v-model="selectedFrequency" @change="prepareFreqOptionChanged" style="height: 34px; padding: 6px 12px;">
                    <option :value="0" disabled>Select a type of frequency</option>
                    @foreach (collect($frequencies) as $key => $frequency)
                        <option :value="{{ json_encode($frequency) }}">{{$frequency['label']}}</option>
                    @endforeach
                  </select>
              </div>

            </div>
        </div>
        <div class="modal-footer">
          {{-- {!! Form::submit('Import', ['class' => 'btn btn-primary']) !!} --}}
          <button class="btn btn-primary" data-dismiss="modal" @click="prepareCronExpression">Prepared</button>
          <button class="btn btn-outline-warning" data-dismiss="modal">Close</button>
        </div>
      </form>
    </div>
  </div>
</div>
