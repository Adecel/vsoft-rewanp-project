<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [\App\Http\Controllers\IndexController::class, 'getData']);

Route::get('/services', function (){
    return view('services.services');
 });

 //Services / Web services /
 Route::get('/services/web-services', function (){
    return view('services.web_services');
 });
 Route::get('/services/web-services/website-design', function (){
    return view('services.web_services.website_design');
 });

 Route::get('/services/web-services/web-maintenance', function (){
    return view('services.web_services.web_maintenance');
 });

 Route::get('/services/web-services/web-development', function (){
    return view('services.web_services.web_development');
 });

 Route::get('/services/web-services/graphic-design-&-logo-service', function (){
    return view('services.web_services.graphic_design_&_logo_service');
 });

 Route::get('/services/web-services/search-engine-optimization', function (){
    return view('services.web_services.search_engine_optimization');
 });

 Route::get('/services/web-services/(PPC)-Pay-Per-Click', function (){
    return view('services.web_services.(PPC)_Pay-Per-Click');
 });

 Route::get('/services/web-services/internet-marketing-(SEM)', function (){
    return view('services.web_services.internet_marketing_(SEM)');
 });

 Route::get('/services/web-services/website-design', function (){
    return view('services.web_services.website_design');
 });

 Route::get('/services/web-services/SEO-copywriting', function (){
    return view('services.web_services.SEO_copywriting');
 });

 //Services / Web services /
 Route::get('/services/enterprise-solutions', function (){
    return view('services.enterprise_solutions');
 });
 Route::get('/services/enterprise_solutions/e-commerce-platform', function (){
    return view('services.enterprise_solutions.e-commerce_platform');
 });

 Route::get('/services/enterprise_solutions/enterprise-resource-planning-(ERP)', function (){
    return view('services.enterprise_solutions.enterprise_resource_planning_(ERP)');
 });

 Route::get('/services/enterprise-solutions/project-management', function (){
    return view('services.enterprise_solutions.project_management');
 });
 Route::get('/services/enterprise_solutions/fleet-track-management', function (){
    return view('services.enterprise_solutions.fleet_track_management');
 });

 Route::get('/services/enterprise_solutions/messaging-e-portal-solution', function (){
    return view('services.enterprise_solutions.messaging_e-portal_solution');
 });

 //Services / Cyber Security /
Route::get('/services/cyber-security', function (){
    return view('services.cyber_and_intelligence_security');
});

Route::get('/services/cyber-security/analytical-analysis', function (){
    return view('services.cyber_and_intelligence_security.analytical_analysis');
});

Route::get('/services/cyber-security/biometric-solution', function (){
    return view('services.cyber_and_intelligence_security.biometric_solution');
});

Route::get('/services/cyber-security/digital-forensics', function (){
    return view('services.cyber_and_intelligence_security.digital_forensics_analytics');
});

Route::get('/services/cyber-security/extract-physical-data', function (){
    return view('services.cyber_and_intelligence_security.extract_physical_data');
});

Route::get('/services/cyber-security/hacker-detect', function (){
    return view('services.cyber_and_intelligence_security.hacker_detect');
});

Route::get('/services/cyber-security/information-security', function (){
    return view('services.cyber_and_intelligence_security.information_security');
});

Route::get('/services/cyber-security/lbs-tracker', function (){
    return view('services.cyber_and_intelligence_security.lbs_tracker');
});

Route::get('/services/cyber-security/risk_advisory', function (){
    return view('services.cyber_and_intelligence_security.risk_advisory');
});

Route::get('/services/cyber-security/security-integration', function (){
    return view('services.cyber_and_intelligence_security.security_integration');
});

Route::get('/services/cyber-security/smart-city-solutions', function (){
    return view('services.cyber_and_intelligence_security.smart_city_solutions');
});

Route::get('/services/cyber-security/smart-geo-fencing', function (){
    return view('services.cyber_and_intelligence_security.smart_geo_fencing');
});

Route::get('/services/cyber-security/ufed', function (){
    return view('services.cyber_and_intelligence_security.ufed');
});

 //Services / Software Development /
Route::get('/services/software-dev', function (){
    return view('services.software_development');
});

Route::get('/services/software-dev/sd-and-programming', function (){
    return view('services.software_development.sd_and_programming');
});

Route::get('/services/software-dev/mobile-app-&-dev', function (){
    return view('services.software_development.mobile_app_&_dev');
});

Route::get('/services/software-dev/game-development', function (){
    return view('services.software_development.game_development');
});

 //Services / Tech Expertise /

 Route::get('/services/tech-expertise', function (){
    return view('services.tech_expertise');
});

Route::get('/services/tech-expertise/cloud-computing', function (){
    return view('services.technology_expertise.cloud_computing');
});

Route::get('/services/tech-expertise/ms-with-health-&-safety', function (){
    return view('services.technology_expertise.ms_with_health_&_safety');
});

Route::get('/services/tech-expertise/remote-desktop-support', function (){
    return view('services.technology_expertise.remote_desktop_support');
});

Route::get('/services/tech-expertise/rfid-solutions', function (){
    return view('services.technology_expertise.rfid_solutions');
});

//Services / Chat bot Expertise /
Route::get('/services/chatbot-expertise', function (){
    return view('services.chatbot_expertise');
});
Route::get('/services/chatbot-expertise/chat-bot', function (){
    return view('services.chatbot_expertise.chat_bot');
});
Route::get('/services/chatbot-expertise/convesational-agent', function (){
    return view('services.chatbot_expertise.convesational_agent');
});
// /services/chatbot-expertise/chat-bot

  // Articles
 Route::get('/articles', [\App\Http\Controllers\IndexController::class, 'getAllArticles']);
 Route::get('/articles/news/{id}', [\App\Http\Controllers\IndexController::class, 'readArticle']);

  //components / services_services /
  Route::get('/components/services-services/game-Development', function (){
    return view('components.services_services.game_Development');
 });
 Route::get('/components/services-services/search-Engine-Marketing', function (){
    return view('components.services_services.search_Engine_Marketing');
 });
 Route::get('/components/services-services/mobile-Application-Development', function (){
    return view('components.services_services.mobile_Application_Development');
 });


 //Sending Mail
Route::post('/', [\App\Http\Controllers\EmailController::class, 'sendEmail'])->name('email-sent');

