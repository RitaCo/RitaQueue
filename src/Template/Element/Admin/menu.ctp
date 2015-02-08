<li>
	<a href="<?= $this->Url->build(['plugin' => 'Rita/JobQueue' ,'controller' => 'Doshboard','action' => 'welcome'])?>">
		<div class="icon"><i class="  icon-taskmanager-logprograms"></i></div>
		<div class="label"><span>مدیریت وظایف</span></div>
	</a>
	<ul class="menu-submenu">
		<li>
			<a href="<?= $this->Url->build(['plugin' => 'Rita/JobQueue' ,'controller' => 'CronTasks','action' => 'index'])?>">
				<div class="icon"><i class=" icon-homealt"></i></div>
				<div class="label"><span>کورن تسک</span></div>
			</a>
		</li>
		<li>
			<a href="<?= $this->Url->build(['plugin' => 'Rita/JobQueue' ,'controller' => 'Queue','action' => 'index'])?>">
				<div class="icon"><i class=" icon-homealt"></i></div>
				<div class="label"><span>صف</span></div>
			</a>
		</li>


	</ul>								
</li>