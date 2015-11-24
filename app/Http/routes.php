<?php
Route::get('/', function () {
    return view('welcome');
});
Route::resource('articles', 'ArticlesController');
//// 1- Development Office Routes xxxxx

       //Development- Dashboard
       Route::get('development', function () {
       return view('dev.DevOffice');
       });

//Create A New Bast By Adminstrator
Route::resource('bast', 'BastController');
//Comparison Form
Route::resource('comparison', 'ComparisonController');
//Employee Plan
Route::resource('plan', 'PlanController');
Route::resource('devreport', 'DevreportController');
Route::resource('devplanA', 'DevplanAController');
Route::resource('devplanB', 'DevplanBController');
Route::resource('devplanC', 'DevplanCController');

//Yearly Reports
//       Route::get('devReport', function () {
//           return view('dev.devReport');
//       });

//// End- -----------------------------------------------------------------------------------------

// 2- EmploymentOffice Routes xxxxx

        //EmploymentOffice- Dashboard
        Route::get('employment', function () {
            return view('emp.EmploymentOffice');
        });

Route::resource('selection', 'SelectionController');
Route::resource('p2form', 'P2Controller');
Route::resource('interview', 'InterviewController');
Route::resource('emptybast', 'EmptybastController');
Route::resource('listcondidate', 'ListcondidatesController');
Route::resource('shortlist', 'ShortlistController');
Route::resource('empreport', 'EmpreportController');
Route::resource('darkhasti', 'DarkhastiController');
Route::resource('contract', 'ContractController');
Route::resource('empplanA', 'EmpplanAController');
Route::resource('empplanB', 'EmpplanBController');
Route::resource('empplanC', 'EmpplanCController');


//// End- -----------------------------------------------------------------------------------------
//
//// 3- Relations Office Routes xxxxx

        //RelationOffice- Dashboard
        Route::get('relation', function () {
        return view('relation.RelationOffice');
        });

Route::resource('seminar', 'SeminarController');
Route::resource('complain', 'ComplainController');
Route::resource('relationreport', 'RelationreportController');
Route::resource('relationplanA', 'RelationplanAController');
Route::resource('relationplanB', 'RelationplanBController');
Route::resource('relationplanC', 'RelationplanCController');

//        //Yearly Reports
//        Route::get('relationReport', function () {
//            return view('relation.relationReport');
//        });
//// End- -----------------------------------------------------------------------------------------
//
//// 4- CapacityBuilding Routes xxxx
//
        //Capacity-Building - Dashboard
        Route::get('capacity', function () {
            return view('capacity.CapacityOffice');
        });

Route::resource('neyazsangi', 'NeyazsangiController');
Route::resource('education', 'EducationController');
Route::resource('training', 'TrainingController');
Route::resource('capacityreport', 'CapacityreportController');
Route::resource('capacityplanA', 'CapacityplanAController');
Route::resource('capacityplanB', 'CapacityplanBController');
Route::resource('capacityplanC', 'CapacityplanCController');


//
//        //Plan A
//        Route::get('plana', function () {
//            return view('capacity.planA');
//        });
//
//        //Plan B
//        Route::get('planb', function () {
//            return view('capacity.planB');
//        });
//
//        //Plan C
//        Route::get('planc', function () {
//            return view('capacity.planC');
//        });

//         //CapacityBuilding YearlyReport
//        Route::get('capacityreport', function () {
//            return view('capacity.capacityreport');
//        });

//// End- --------------------------------------------------------------------------------------------------
//
//// 5- Evaluation Office Routes xxxxx

        //Evaluation Office- Dashboard
        Route::get('evaluation', function () {
            return view('evaluation.EvaluationOffice');
        });
//
//        //UpperEvaluation Form
//        Route::get('Uppevaluation', function () {
//            return view('evaluation.Uppevaluation');
//        });
//
//        //LowerEvaluation Form
//        Route::get('lowerEvaluation', function () {
//            return view('evaluation.lowerEvaluation');
//        });
//
//        //Employee Documentaion
//         Route::get('document', function () {
//            return view('evaluation.user');
//        });
//
        //DeathForm
         Route::get('re', function () {
            return view('evaluation.retired_create');
        });

Route::resource('course', 'CourseController');
Route::resource('death', 'DeathController');
Route::resource('retired', 'RetiredController');
Route::resource('lowerevaluation', 'LowerEvaluationController');
Route::resource('upperevaluation', 'UpperevaluationController');
Route::resource('userdocumentation', 'UserdocumentationController');
Route::resource('evaluationreport', 'EvaluationreportController');
Route::resource('evaluationplanA', 'EvaluationplanAController');
Route::resource('evaluationplanB', 'EvaluationplanBController');
Route::resource('evaluationplanC', 'EvaluationplanCController');


//// End- --------------------------------------------------------------------------------------------------
//
//// 6- Execution Office Routes xxxxx
//
        //-Execution Office- Dashboard
        Route::get('execution', function () {
            return view('execution.ExecutionOffice');
        });
//
        //Orders
        Route::get('order', function () {
            return view('execution.order');
        });
//
//        //Reports
//        Route::get('executionReport', function () {
//            return view('execution.executionreport');
//        });
Route::resource('executionreport', 'ExecutionreportController');
Route::resource('executionplanA', 'ExecutionplanAController');
Route::resource('executionplanB', 'ExecutionplanBController');
Route::resource('executionplanC', 'ExecutionplanCController');
Route::resource('orders', 'OrdersController');

//
//// End- --------------------------------------------------------------------------------------------------
//
//// HR Functional Routes xxxxxx
//
//
//        //Register/Create New Account For Employee
//        Route::get('register', function(){
//            return View::make('admin.register');
//        });
//
//        //login Page
//        Route::get('login', function(){
//            return View::make('login');
//        });
//
//        //forgot_Password Page
//        Route::get('forgotPass', function(){
//            return View::make('forgot-password');
//        });
//
//
//        //Not_Found error Page
//        Route::get('404', function() {
//            return View::make('page-404');
//        });
//
//        //Server_Error Page
//        Route::get('500', function(){
//            return View::make('page-500');
//        });
//
//        //Lock_Screen Page
//        Route::get('lock', function() {
//            return View::make('lockscreen');
//        });
//
//
//// End- --------------------------------------------------------------------------------------------------
//
//
//// End- HR MIS Routes

