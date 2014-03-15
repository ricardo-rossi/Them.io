  <div class="row">
    <div class="col-md-12">

			<div class="panel panel-default">
			  <div class="panel-body">

			  	<div class="poll-title">
				  	<input id="poll-title" type="text" ng-model="poll.title" data-toggle="popover" data-placement="top" data-trigger="focus" data-content="This is the title of the poll." data-original-title="Poll Title">
				  </div>
			    <div class="poll-desc">
				  	<input type="text" ng-model="poll.description" placeholder="Poll Description">
			    </div>
					
					<div id="@{{$index}}" draggable droppable drop="handleDrop" class="row poll-item poll-option" ng-repeat="option in poll.options">
						<div id="row_@{{$index}}" class="col-md-12 animated" ng-class="{flipInX: !$first}">
							<div class="form-inline indent-10" ng-class="{draghandle: isTouch==false}"
								>

								<span ng-show="isTouch" ng-cloak class="updown-buttons">
									<span ng-show="$first" style="margin-left:13px;"></span>
									<span ng-show="$last" style="margin-left:13px;"></span>
									<span ng-click="moveUp($index)" ng-hide="$first" class="glyphicon glyphicon-chevron-up poll-option-up">
									</span>
									<span ng-click="moveDown($index)" ng-hide="$last" class="glyphicon glyphicon-chevron-down poll-option-down">
									</span>
									<span ng-show="$first" style="margin-left:12px;"></span>
									<span ng-show="$last" style="margin-left:12px;"></span>
								</span>

								</span>
								<span class="poll-radio">
									<input type="radio" disabled>
								</span>
								<span class="poll-option-text">
									<input id="@{{option.id}}" type="text" size="40" 
									ng-model="option.text" class="poll-option" data-toggle="popover" data-placement="top" data-trigger="focus" data-content="This is the option of the poll." data-original-title="Poll Option"> 
								</span>
									<span ng-click="removeOption(option)" ng-keypress="removeOption(option)" class="glyphicon glyphicon-remove poll-option-remove" ></span>
								
							</div>
						</div>
					</div>
					<div ng-hide="isTouch" ng-cloak class="row poll-option">
						<div class="col-md-12">
							<div class="form-inline" style="padding-left:25px;">
								<span class="poll-radio">
									<input type="radio" disabled>
								</span>
								<span class="poll-add-option">
									<input ng-model="new_option" ng-click="addOption(new_option)" 
									data-ng-change="addOption(new_option)" type="text" size="40" placeholder="Click to add option">
								</span>
<!-- 								<span class="poll-option-other" tabindex="0">
									or <a class="tt" data-toggle="tooltip" data-placement="top"title="add the Other field" ng-click="">Add Other</a>
								</span>
 -->							</div>
						</div>
					</div>
					<div ng-show="isTouch" ng-cloak class="row poll-option">
						<div class="col-md-12">
							<div class="form-inline" style="padding-left:82px;">
							<span class="poll-add-option">
									<button ng-model="new_option" ng-click="addOption(new_option)" class="btn btn-sm btn-success">Add</button>
								</span>
	<!-- 							<span class="poll-option-other" tabindex="0">
									or <a ng-click="">Add Other</a>
								</span>
	 -->						</div>
						</div>					
					</div>
			  </div>
			  <div class="panel-footer">
			  	<button onclick="console.log('clicked');" class="btn btn-md btn-primary padded-sides-15">
			  		Save
			  	</button>
			  </div>
			</div>

			<pre>@{{ poll }}</pre>

   	</div>
  </div>