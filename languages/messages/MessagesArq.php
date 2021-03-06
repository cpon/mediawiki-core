<?php
/** Algerian Spoken Arabic (جزائري)
 *
 * See MessagesQqq.php for message documentation incl. usage of parameters
 * To improve a translation please visit http://translatewiki.net
 *
 * @ingroup Language
 * @file
 *
 * @author Bachounda
 * @author Oldstoneage
 */

$fallback = 'ar';

$messages = array(
# User preference toggles
'tog-underline' => 'تسطار الوصيلات:',
'tog-hideminor' => 'خبي الكتيبات الصغيرة في التبديلات التوالا',
'tog-hidepatrolled' => 'خبي الكتيبات المعسوسه في التبديلات التوالا',
'tog-newpageshidepatrolled' => 'خبي الباجات المعسوسه اللي في ليستت الباجات الجدد',
'tog-extendwatchlist' => 'دلي الليسته نتاع التبيعه باش تعرض كامل التبديلات و مشي برك التوالا',
'tog-usenewrc' => 'اجمع الـتبدالات بل صفحات فل تبدالات الـتالية و الـليستة تاع الـمراقبة (تستحق الـ JavaScript)',
'tog-numberheadings' => 'رقم اليا عناوين السكسيو',
'tog-showtoolbar' => 'تبيان باره الكتيبات (يلزمها جافاسكريبت)',
'tog-editondblclick' => 'كتيبت الباجات بالزوج دركات (يلزمها جافاسكربت)',
'tog-editsectiononrightclick' => 'اكتيفي كتيبت السكسيوات بالدريك باليمين على العناوين نتاعهم(يتطلب جافاسكريبت)',
'tog-rememberpassword' => 'اتفكر الدخول تاعي ب هاذ النافيكاتور (ب مدّة حدها{{PLURAL:$1||يوم واحد|يومين|$1 إيّام|$1 يوم}})',
'tog-watchcreations' => 'زيد الـصفحات اللي نخلقها و الـفيشيّات فل قايمة تاع التتباع تاعي',
'tog-watchdefault' => 'زيد الـصفحات و الـفيشيّات اللي نبدّلها فل قايمة تاع الـتتباع تاعي',
'tog-watchmoves' => 'زيد الـصفحات و الـفيشيات اللي نحوّلها فل قايمة تاع الـتباع تاعي',
'tog-watchdeletion' => 'زيد الـصفحات اللي نفصيها فل قايمة تاع التتباع تاعي',
'tog-minordefault' => 'ماركي كل التبديلات بلي راهي خفيفه',
'tog-previewontop' => 'وري شوفه-قبليه للكتبه فوق صندوق الكتيبه',
'tog-previewonfirst' => 'بين شوفه-قبليه مع اول تبديله',
'tog-enotifwatchlistpages' => 'ابحت لي إيمال كي تتبدّل صفحة ولا فيشي من الـليستة تاع الـتتباع تاعي',
'tog-enotifusertalkpages' => 'ابعثلي بريه كل ما تبدلت باجت نقاش ديالي',
'tog-enotifminoredits' => 'ابعت لي بريه حتا يلا كانت تبدالات صغيرة فلباجات و الـفيشيّات',
'tog-enotifrevealaddr' => 'بين لادريستي إلكترونيك في براوات الاعلام',
'tog-shownumberswatching' => 'بين شحال كاين من مستعمل يتبع الباجه',
'tog-oldsig' => 'خطّ‘لـيدّ اللي كاين',
'tog-fancysig' => 'اعتبر التوقيع كي كتيبه ويكي (بلا وصيله توماتيك)',
'tog-uselivepreview' => 'استعمل الـنضرة الـقبلانيّة (تستحق الـ JavaScript) (تجرابيّة)',
'tog-forceeditsummary' => 'نبّهني كي تندخل كاش صفحة خاوية',
'tog-watchlisthideown' => 'خبّي الـتبدالات تاوعي فل ليستة تاع الـتتباع',
'tog-watchlisthidebots' => 'خبّي الـتبدالات تاع الـروبويات فل ليستة تاع التتباع تاعي',
'tog-watchlisthideminor' => 'خبّي الـتبدالات الـصغيرة من الـليستة تاعي تاع التتباع',
'tog-watchlisthideliu' => 'خبّي فل قايمة تاع التتباع تاعي الـتبدالات الـمديورة من عند الـمستعمليين الـمتماركيين',
'tog-watchlisthideanons' => 'خبّي فل قايمة تاع التتباع تاعي الـتبدالات الـمديورة من عند الـمستعمليين الـماشي متماركيين',
'tog-watchlisthidepatrolled' => 'خبّي الـتبدالات تاع الـمتبّعة فل ليستة تاع التتباع تاعي',
'tog-ccmeonemails' => 'ابعت لي نسخة تاع الـإيمالات الّي نبعتهم لل مستعمليين لخرين',
'tog-diffonly' => 'ما تورّيش الـمضمون تاع الـصفحات تحت الـفروقات',
'tog-showhiddencats' => 'ورّي الـفصلات الـمخبّيين',
'tog-norollbackdiff' => 'ما تورّيش الـفروق كي تدير رجوع',
'tog-useeditwarning' => 'نبّهني كي نخرج من صفحة كنت نكتب فيها بلا ما نعمّر الخدمة',
'tog-prefershttps' => 'نستعمل دايمن توصال مأمون كي ندخل',

'underline-always' => 'ديما',
'underline-never' => 'ابدا',
'underline-default' => 'الـقيمة الـعاديّة تاع الـواجهة و الـفلّاك',

# Font style option in Special:Preferences
'editfont-style' => 'بدّل الـستيل تاع الـكتبة فل قابسة تاع الـكتيبة',
'editfont-default' => 'نوع‘ الـكتبة الـعادية فل فلّاك',
'editfont-monospace' => 'الـعرض تاع الـحرف يكون تابت',
'editfont-sansserif' => 'حروف بلا زوايد',
'editfont-serif' => 'حروف بل زوايد',

# Dates
'sunday' => 'الحد',
'monday' => 'لثنين',
'tuesday' => 'التلاته',
'wednesday' => 'لاربعه',
'thursday' => 'الخميس',
'friday' => 'الجمعه',
'saturday' => 'السبت',
'sun' => 'الحد',
'mon' => 'لثنين',
'tue' => 'الثلاثه',
'wed' => 'لاربعه',
'thu' => 'الخميس',
'fri' => 'الجمعه',
'sat' => 'السبت',
'january' => 'جانفي',
'february' => 'فيفري',
'march' => 'مارس',
'april' => 'أفريل',
'may_long' => 'ماي',
'june' => 'جوان',
'july' => 'جويليي',
'august' => 'أوت',
'september' => 'سبتمبر',
'october' => 'أكتوبر',
'november' => 'نوفمبر',
'december' => 'ديسمبر',
'january-gen' => 'جانفي',
'february-gen' => 'فيفري',
'march-gen' => 'مارس',
'april-gen' => 'أفريل',
'may-gen' => 'ماي',
'june-gen' => 'جوان',
'july-gen' => 'جويليي',
'august-gen' => 'أوت',
'september-gen' => 'سبتمبر',
'october-gen' => 'أكتوبر',
'november-gen' => 'نوفمبر',
'december-gen' => 'ديسمبر',
'jan' => 'جانفي',
'feb' => 'فيفري',
'mar' => 'مارس',
'apr' => 'أفريل',
'may' => 'ماي',
'jun' => 'جوان',
'jul' => 'جويليي',
'aug' => 'أوت',
'sep' => 'سيبتمبر',
'oct' => 'أوكتوبر',
'nov' => 'نوفمبر',
'dec' => 'ديسمبر',
'january-date' => 'جانفيي $1',
'february-date' => 'فيفريي $1',
'march-date' => 'مارس $1',
'april-date' => 'آفريل $1',
'may-date' => 'ماي $1',
'june-date' => 'جوان $1',
'july-date' => 'جويليي$1',
'august-date' => 'أوت $1',
'september-date' => 'سبتامبر $1',
'october-date' => 'اكتوبر $1',
'november-date' => 'نوفامبر $1',
'december-date' => 'ديسمبر $1',

# Categories related messages
'pagecategories' => '{{PLURAL:$1|فصيلة|فصيلات}}',
'category_header' => 'الباجه في التصنيف "$1"',
'subcategories' => 'تصنيفات تحتيه',
'category-media-header' => 'فيشيي ميلتيميديا فالكاتيكورى  "$1"',
'category-empty' => "''هاذ التصنيف ما فيهش لا باجات و لا ميلتيميديا.''",
'hidden-categories' => '{{PLURAL:$1|تصنيف مدسوس|تصنيفات مدسوسة}}',
'hidden-category-category' => 'تصنيفات مخبّية',
'category-subcat-count' => '{{PLURAL:$2|هاذ التصنيف فيه التصنيف الفرعي التالي|هاذ التصنيف فيه{{PLURAL:$1||التصنيف الفرعي|$1 تصنيفات فرعية}}، من إجمالي $2.}}',
'category-subcat-count-limited' => 'هاد الـتصنيف يسيع {{PLURAL:$1||التصنيف الفرعي التابع|التصنيفات الفرعية $1  التابعة}}.',
'category-article-count' => 'هاذ الكاتيكورى فيها {{PLURAL:$2|هاذ الفيشيي|$2 الفيشيي, اللي{{PLURAL:$1|هاذ|نتع$1}} من تحتا}}.',
'category-article-count-limited' => '{{PLURAL:$1||الصفحة التابعة|الـ $1 ‘ن صفحة التابعة}} مصنّفة ب هاذ التصنيف.',
'category-file-count' => 'هاذ الكاتيكورى فيها {{PLURAL:$2|هاذ الفيشيي|$2 الفيشيي, اللي{{PLURAL:$1|هاذ|نتع$1}} من تحتا}}.',
'category-file-count-limited' => '{{PLURAL:$1|الملف التابع مصنّف|الملفات الـ $1 التابعة مصنّفة}} ب هاذ التصنيف.',
'listingcontinuesabbrev' => 'يُتبع',
'index-category' => 'صفحات مفهّرسة',
'noindex-category' => 'باجات مشي مفهرسه',
'broken-file-category' => 'صفحات فيها وصيلات تاع ملفّات خاسرة',

'about' => 'على هاذ الويكي',
'article' => 'صفحة تاع محتوى',
'newwindow' => '(حل في تاقة جديدة)',
'cancel' => 'انيلي',
'moredotdotdot' => 'كتر...',
'morenotlisted' => 'كتر ماشي مليستي...',
'mypage' => 'باجه',
'mytalk' => 'نقاش',
'anontalk' => 'تناقش على الـ ip هادي',
'navigation' => 'تبحار',
'and' => '&#32;و',

# Cologne Blue skin
'qbfind' => 'فتش',
'qbbrowse' => 'اتجوّل فل مضمون',
'qbedit' => 'اكتب',
'qbpageoptions' => 'هاذ الباجه',
'qbmyoptions' => 'الباجات نتاوعى',
'faq' => 'المسقسية المتعاوده',
'faqpage' => 'Project:سؤالات متكرره',

# Vector skin
'vector-action-addsection' => 'زيد موضوع',
'vector-action-delete' => 'امحي',
'vector-action-move' => 'حول',
'vector-action-protect' => 'بروجي',
'vector-action-undelete' => 'ردّ كيما كان',
'vector-action-unprotect' => 'بدّل الـحماية',
'vector-view-create' => 'أصنع',
'vector-view-edit' => 'بدل',
'vector-view-history' => 'روح للتاريخي',
'vector-view-view' => 'أقرى',
'vector-view-viewsource' => 'شوف المصدر',
'actions' => 'أفعال',
'namespaces' => 'بلاصه تع أسموات',
'variants' => 'متغيرات',

'navigation-heading' => 'القايمة تاع الـتبحار',
'errorpagetitle' => 'غلطه',
'returnto' => 'ولي إلى $1.',
'tagline' => 'من{{SITENAME}}',
'help' => 'معاونة',
'search' => 'فتّش',
'searchbutton' => 'فتش',
'go' => 'شايع',
'searcharticle' => 'روح',
'history' => 'تاريخ الملف',
'history_short' => 'تاريخ',
'updatedmarker' => 'مبدّل منلي الزيارة تاعي الـتالية',
'printableversion' => 'نسخه نتاع طبيع',
'permalink' => 'وصيل دايم',
'print' => 'امبريمي',
'view' => 'اقرا',
'edit' => 'بدل',
'create' => 'أصنع',
'editthispage' => 'بدّل هاد الـصفحة',
'create-this-page' => 'خلّق صفحة ب هاد الـعلوان',
'delete' => 'امحي',
'deletethispage' => 'امحي هاد الـصفحة',
'undeletethispage' => 'ردّ الصفحة الّي محيتها',
'protect' => 'حمايه',
'protect_change' => 'بدل',
'newpage' => 'باجه جديده',
'talkpagelinktext' => 'ناقش',
'personaltools' => 'ادوالت شخصيه',
'talk' => 'مناقشه',
'views' => 'شوفات',
'toolbox' => 'صندوق الادوات',
'otherlanguages' => 'بلوغات وحد اوخره',
'redirectedfrom' => '(محول من $1)',
'lastmodifiedat' => 'هاد الباجه راهي تبدّلت نهار الـ $1, على الـساعة $2.',
'jumpto' => 'اقفز ل:',
'jumptonavigation' => 'تجوال',
'jumptosearch' => 'تفتاش',

# All link text and link target definitions of links into project namespace that get used by other message strings, with the exception of user group pages (see grouppage).
'aboutsite' => 'على{{SITENAME}}',
'aboutpage' => 'Project:على',
'copyrightpage' => '{{ns:project}}:حقوق النسخ',
'currentevents' => 'الخبورات',
'currentevents-url' => 'Project:خبورات',
'disclaimers' => 'تنبيهات',
'disclaimerpage' => 'Project:التحذيرات العامه',
'edithelp' => 'معونة',
'mainpage' => 'الباجة اللوله',
'mainpage-description' => 'الباجة اللوله',
'portal' => 'المجتمع',
'portal-url' => 'Project:بورطاي المجتمع',
'privacy' => 'السياسة تاع الخصوصيات (الدين الضيّق)',
'privacypage' => 'Project:خصوصيه',

'retrievedfrom' => 'جايبينه من "$1"',
'youhavenewmessages' => 'عندك $1 ($2).',
'editsection' => 'بدل',
'editold' => 'بدل',
'viewsourceold' => 'شوف الاصل',
'editlink' => 'تبديل',
'viewsourcelink' => 'شوف العين',
'editsectionhint' => 'إيديتي الصنف:$1',
'toc' => 'محتويات',
'site-rss-feed' => 'تيار آر‌إس‌إس $1',
'site-atom-feed' => '$1 تيار آتوم',
'page-atom-feed' => '$1 تيار آتوم',
'red-link-title' => '$1 (الباجه ما كاينش)',

# Short words for each namespace, by default used in the namespace tab in monobook
'nstab-main' => 'الباجة',
'nstab-user' => 'باجة{{GENDER:{{BASEPAGENAME}}|المستخدم|المستخدمة}}',
'nstab-special' => 'باجه خوصوصيّة',
'nstab-project' => 'باجه مشروع',
'nstab-image' => 'ملف',
'nstab-template' => 'مودال',
'nstab-category' => 'تصنيف',

# General errors
'missing-article' => 'الداتاباز ما صابتش باجه كان لازم تنصاب، الباجه هي "$1" $2.

نورمالمو يصرا هذا مين اتبع فرق بيريمي والا وصيل تأريخ باجة ممحيه.

إذا ما كانش هذا هو الحال همالا راك طحت في علة تاع البرمجية.
من فضلك سينياليها لواحد من[[Special:ListUsers/sysop|الإداريين]]، و أعطه مسار هذه الباجه.',
'missingarticle-rev' => '(رقم الفرسيون: $1)',
'badtitle' => 'عنوان عيان',
'badtitletext' => 'عنوان الباجه المطلوب إما ماشي صحيح والا فارغ، وبالاك الوصيل بين اللغات والا بين البروجيات ماشي صحيح.
بالاك فيه حروف ما تصلحش  باس يستعملوها فالعناوين.',
'viewsource' => 'شوف الاصل',

# Login and logout pages
'yourname' => 'اسم المستخدم:',
'yourpassword' => 'كلمة السر:',
'yourpasswordagain' => 'عاود كتبت كلمت السر:',
'remembermypassword' => 'اتفكر الدخول تاعي ب هاذ النافيكاتور (ب مدّة حدها{{PLURAL:$1||يوم واحد|يومين|$1 إيّام|$1 يوم}})',
'login' => 'كونكسيون',
'nav-login-createaccount' => 'تسجل/ اصنع حساب',
'loginprompt' => 'لازم تكون الكوكيز لديك ماكتيفيه باش تكونيكتي و تدخل ل{{SITENAME}}.',
'userlogin' => 'تسجل/ اصنع حساب',
'userlogout' => 'سجل خروج',
'nologin' => "ما عندكش حساب مسجل؟ '''$1'''.",
'nologinlink' => 'اصنع حساب',
'createaccount' => 'اصنع حساب',
'gotaccount' => "عندك حساب مسجل؟ '''$1'''.",
'gotaccountlink' => 'كونكسيون',
'userlogin-resetlink' => 'نسيت تفاصيل الدخول؟',
'mailmypassword' => 'أرسل لي كلمة سر جديده',
'loginlanguagelabel' => 'اللوغه: $1',

# Edit page toolbar
'bold_sample' => 'كتيبة غليظه',
'bold_tip' => 'كتيبة غليظه',
'italic_sample' => 'كتبة مايلة',
'italic_tip' => 'نص مايل',
'link_sample' => 'عنوان وصيلة',
'link_tip' => 'وصيلة داخليه',
'extlink_sample' => 'http://www.example.com اسم الوصيلة',
'extlink_tip' => 'وصيلة برانية (ما تنساش البديةhttp://)',
'headline_sample' => 'كتبة نتاع عنوان كبير',
'headline_tip' => 'عنوان من المستوى الثاني',
'nowiki_sample' => 'دخل الكتبة مشي مستفة هنا',
'nowiki_tip' => 'اهمل طريقةالويكي',
'image_tip' => 'ملف داخل',
'media_tip' => 'وصيلة ملف',
'sig_tip' => 'سنياتورتك بالساعة و التاريخ',
'hr_tip' => 'خط أفقي (ما تستعملوش بزاف)',

# Edit pages
'summary' => 'ملخص:',
'minoredit' => 'هذي تبديلة صغيرة',
'watchthis' => 'تبع الباجة',
'savearticle' => 'سجل الباجة',
'preview' => 'شوفه-قبلي',
'showpreview' => 'بين معاينة',
'showdiff' => 'عرض التبديلات',
'anoneditwarning' => "'''توله:''' راك ما دخلتش.
غادي يتسجل لادراس آيبي نتاعك في تاريخ هذه الباجه.",
'newarticle' => '(جديد)',
'newarticletext' => "راك تبعت وصيلة لباجه لم ما تخدمتش بعد.
باش تصنع هاذ الباجه ابدا الكتبه فالصندوق التحت (شوف في [$1  زياده باجه المساعده] لمعلومات).
إذا كانت زيارتك لهاذ الباجه غلطه، ادرك على بوطون''ولى'' في نافيقاتور الإنترنت نتاعك.",
'noarticletext' => 'لحد الساعه ما كانش حتى نص في هاذ الباجه.
تقدرو [[Special:Search/{{PAGENAME}}|ترميو تفتيشه على هاذ العنوان]] فالباجات لخرين,
<span class="plainlinks">[{{fullurl:{{#Special:Log}}|page={{FULLPAGENAMEE}}}} فتش فالعمليات المربوطه]
و إلا[{{fullurl:{{FULLPAGENAME}}|action=edit}} أصنع هاذ الباجه]</span>.',
'noarticletext-nopermission' => 'لحد الساعه ما كانش حتى نص في هاذ الباجه.
تقدرو [[Special:Search/{{PAGENAME}}|ترميو تفتيشه على هاذ العنوان]] فالباجات لخرين,
<span class="plainlinks">[{{fullurl:{{#Special:Log}}|page={{FULLPAGENAMEE}}}} فتش فالعمليات المربوطه]
و إلا[{{fullurl:{{FULLPAGENAME}}|action=edit}} أصنع هاذ الباجه]</span>.',
'previewnote' => "'''ما تنساش هذي معاينه قبليه.'''
لدوك التبديلات دياولك ما تسجلوش!",
'editing' => 'تحرير $1',
'editingsection' => 'كتيبه $1 (قسم)',
'templatesused' => '{{PLURAL:$1||القالب المستعمل|القوالب المستعمله}} في هذه الباجه:',
'template-protected' => '(محميه)',
'template-semiprotected' => '(نص حماية )',
'hiddencategories' => '{{PLURAL:$1|هاد الصفحة ما كايناش فل تصانف المخبّييين|هاد الصفحة كاينة في تصنيف مخبّي واحد|هاد الصفحة كاينة في زوج تاع الـتصانف المخبّيين|هاد الصفحة كاينة في $1 تصنيف مخبّي|هاد الصفحة كاينة في $1 تصنيف مخفبّي|هذه الصفحة كاينة في $1 تصنيف مخبّي}}:',
'permissionserrorstext-withaction' => 'ما راكش اوتوريزى ل$2، لل{{PLURAL:$1||سبب هاذا|اسباب هاذي}}:',
'recreate-moveddeleted-warn' => "'''توليه: راك تعاود تصنع باحه اتمحات من قبل.'''

لازم تتأكد بلى الباجه الا نصنعت ماهوش مشكل الا كملت الكتبه فبها.
ريجيستر المحو و النقل معروض هنا باش تراقب :",
'moveddeleted-notice' => 'هاذ الباجه تمحات .
ريجيستر المحو والتنقال للباجه معروضين التحت كريفيرونس.',

# Parser/template warnings
'post-expand-template-inclusion-warning' => "'''توليه:''' الباجة داخل فيها قوالب بزاف.
شي قوالب ما غاديش تدخل.",
'post-expand-template-inclusion-category' => 'الباجات داخل فيها بزاف القوالب',
'post-expand-template-argument-warning' => "'''توليه:''' هذه الباجه فيها عامل قالب واحد على الأقل عندو حجم تمدد كبير بزاف.
هاذالعوامل اتمحات.",
'post-expand-template-argument-category' => 'باجات فيها مدخلات القالب الممحي',

# History pages
'viewpagelogs' => 'بين العمليات على هاذ الباحه',
'currentrev-asof' => 'النسخه نتاع دروك تاريجها $1',
'revisionasof' => 'معاودة تاع الـ $1',
'revision-info' => 'مراجعه $1 بواسطت $2',
'previousrevision' => '← نسخة اللوله',
'nextrevision' => 'فرسيون جايه←',
'currentrevisionlink' => 'المراجعه الحاليه',
'cur' => 'الحالي',
'last' => 'السابق',
'histlegend' => 'تخيار الفرق: علم على صناديق النسخ للمقارنه و ادرك قارن بين النسخ المختارة والا القفلة التحت .<br />
مفتاح: (الحالي) = الفرق مع النسخة تع دروك
(الفايته) = الفرق مع النسخة اللي فاتت، ط = تبديل خفيف',
'history-fieldset-title' => 'نافيقي في التاريخ',
'history-show-deleted' => 'المماسكيه برك',
'histfirst' => 'اول باجه',
'histlast' => 'باجه تاليه',

# Revision feed
'history-feed-item-nocomment' => '$1 إلى $2',

# Revision deletion
'rev-delundel' => 'بين/خبي',
'revdel-restore' => 'غير كيف راهي تبان',

# Merge log
'revertmerge' => 'فرق',

# Diffs
'history-title' => ' «$1»: تاريخ المراجعات',
'lineno' => 'سطر$1:',
'compareselectedversions' => 'كومباري بين نسختين مخيرين',
'editundo' => 'نحي',

# Search results
'searchresults' => 'ريزيلته نتاع التفتاش',
'searchresults-title' => 'ريزيلته تاع التحواس "$1"',
'prevn' => '{{PLURAL:$1|précédente|$1 اللولانيين}}',
'nextn' => '{{PLURAL:$1|suivante|$1 التاليين}}',
'prevn-title' => '$1 {{PLURAL:$1|النتيجة التالية|النتايج التواله}}',
'nextn-title' => '$1 {{PLURAL:$1|النتيجة الجاية|النتايج الجايين}}',
'shown-title' => 'آفيشي $1 {{PLURAL:$1|نتيجة}} فل صفحة',
'viewprevnext' => 'شوف($1 {{int:pipe-separator}} $2) ($3).',
'searchmenu-exists' => "'''كاين باجه اسمها « [[:$1]] » في هاذ الويكي'''",
'searchmenu-new' => "'''أصنع الباجه « [[:$1|$1]] » في هذ الويكي !'''",
'searchprofile-articles' => 'باجه تع محتوى',
'searchprofile-project' => 'باجه تع المعونه و البروجي',
'searchprofile-images' => 'ميلتيميديا',
'searchprofile-everything' => 'كلش',
'searchprofile-advanced' => 'تفتاش متقدم',
'searchprofile-articles-tooltip' => 'فتش في $1',
'searchprofile-project-tooltip' => 'فتش في  $1',
'searchprofile-images-tooltip' => 'فتش على ملفات ميلتيميديا',
'searchprofile-everything-tooltip' => 'فتش في قاع السيت (حتى في باجات المناقشه)',
'searchprofile-advanced-tooltip' => 'خير إسباسات الأسامي للتفتاش',
'search-result-size' => '$1 ({{PLURAL:$2|1 كلمة|$2 كلمات}})',
'search-result-category-size' => '$1 عضو{{PLURAL:$1||s}} ($2 كاتيكورى فرعيه{{PLURAL:$2||s}}, $3 فيشيي{{PLURAL:$3||يات}})',
'search-redirect' => '(تحويل من $1)',
'search-section' => '(قسمت‘ $1)',
'search-suggest' => 'كنت باغي تقول: $1',
'searchrelated' => 'مرتابطه',
'searchall' => 'ألكل',
'showingresultsheader' => "{{PLURAL:$5|نتيجه'''$1'''|نتايج'''$1–$2'''}} تع'''$3''' لـ'''$4'''",
'search-nonefound' => 'ما كانش نتائج تطابق المسقسية.',

# Preferences page
'mypreferences' => 'إختيارات',
'youremail' => 'البريه الالكترونيه:',
'yourrealname' => 'الاسم الحقاني:',
'prefs-help-email' => 'لادريس نتع البريه الإلكترونيه بالخاطر، ولكن هي لازمه في حال نسيت كلمت السر نتاعك.',
'prefs-help-email-others' => 'تقدر تاني تخلي لوخرين يتاصلو بيك في باجت نقاشك ولا في وصيله في باجت مستخدم نتاعك, اذا ارسلك واحد ما يبانش لادريس نتاعك , حتى اذ رديت عليه باش يبان لادريس نتاعك.',

# Special:Log/newusers
'newuserlogpage' => 'ريجيستر صنعة حسابات المستخدمين',

# Associated actions - in the sentence "You do not have permission to X"
'action-edit' => 'عدل هاذ الباجه',

# Recent changes
'nchanges' => '$1 تبديله{{PLURAL:$1||s}}',
'recentchanges' => 'تبديلات توالا',
'recentchanges-legend' => 'ابسيون التبديلات التواله',
'recentchanges-feed-description' => 'تبع التبديلات الجدد للويكي في هاذ التيار .',
'recentchanges-label-newpage' => ' هاذ التبديل صنع باجه جديده',
'recentchanges-label-minor' => 'هاذا تبديل صغير',
'recentchanges-label-bot' => 'هاذ التبديل ندار بروبو',
'recentchanges-label-unpatrolled' => 'ما تراجعتش هاذ التبديله للآن',
'rcnotefrom' => "هاهي التبديلات  من'''$2''' (ل'''$1''' معروضه).",
'rclistfrom' => 'بين التبديلات البديه من $1',
'rcshowhideminor' => '$1 التبديلات الصغير',
'rcshowhidebots' => '$1 البوتات',
'rcshowhideliu' => '$1 المستخدمين المسجلين',
'rcshowhideanons' => '$1 المستخدمين المجهولين',
'rcshowhidepatr' => '$1 التبديلات المعسوسه',
'rcshowhidemine' => '$1 تبديلات نتاعي',
'rclinks' => 'بين آخر $1 تبديل في آخر $2 يوم<br />$3',
'diff' => 'إختلاف',
'hist' => 'تاريخ',
'hide' => 'خبي',
'show' => 'بين',
'minoreditletter' => 'ط',
'newpageletter' => 'ج‌',
'boteditletter' => 'ب',
'rc-enhanced-expand' => 'بين التفاصيل (يلزمها جافاسكريبت)',
'rc-enhanced-hide' => 'خبي التفاصيل',

# Recent changes linked
'recentchangeslinked' => 'تبديلات مربوطه',
'recentchangeslinked-toolbox' => 'تبديلات الباجات المرتبطه',
'recentchangeslinked-title' => 'التبديلات المرتبطة ب "$1"',
'recentchangeslinked-summary' => "هاذي ليستة تع التبديلات اللي تمت هاذ الخطرة للباجات الموصولة من باجة معينة (ولا للأعضاء الداخلين في تصنيف معين).
الصفحات في [[Special:Watchlist|ليستت مراقبة نتاعك]] '''مغلظه'''",
'recentchangeslinked-page' => 'اسم الباجه:',
'recentchangeslinked-to' => 'بين التبديلات للباجات الموصولة للباجه المعطية عوضا العكس',

# Upload
'upload' => 'طلع فيشي',
'uploadlogpage' => 'ريجيستر رفع الفيشيات',
'filedesc' => 'ملخص',
'uploadedimage' => 'راه طلع "[[$1]]"',

'license' => 'ترخيص:',
'license-header' => 'ترخيص:',

# File description page
'file-anchor-link' => 'ملف',
'filehist' => 'تاريخ الفيشيي',
'filehist-help' => 'ادرك على وقت و تاريخ/باش تشوف الملف كما بان  في هاذ الوقت.',
'filehist-revert' => 'رجع',
'filehist-current' => 'ذ الوقت',
'filehist-datetime' => 'تاريخ و الوقت',
'filehist-thumb' => 'تصويرة مصغرة',
'filehist-thumbtext' => 'فينيات نتع النسخه $1',
'filehist-user' => 'مستعمل',
'filehist-dimensions' => 'القيس',
'filehist-comment' => 'تعليق',
'imagelinks' => 'إستعمال الملف',
'linkstoimage' => '{{PLURAL:$1|الباجة توصل|ال$1 باجات يوصلو}} لهاذ الملف :',
'nolinkstoimage' => 'ما كانش باجات موصوله لهاذ الفيشي.',
'sharedupload-desc-here' => 'هاذ الملف جاي من $1. يمكن يكون مستعمل من بروجيات وحد أخرين.
التوصيف نتاعو في [$2 باجت الصفات] محطوطه هنا لتحت.',

# Random page
'randompage' => 'باجة على الزهر',

# Statistics
'statistics' => 'إحصاويّات',

# Miscellaneous special pages
'nbytes' => '$1 اوكتي{{PLURAL:$1||s}}',
'nmembers' => '$1 اعضاء{{PLURAL:$1||s}}',
'prefixindex' => 'كامل الباجات الباديه ب',
'usercreated' => '{{GENDER:$3|صنعه|صنعته}} في $1 الساعة $2',
'newpages' => 'باجه جديده',
'move' => 'عاود التسمية',
'pager-newer-n' => '{{PLURAL:$1|جديد بزاف 1|جديد بزاف $1}}',
'pager-older-n' => '{{PLURAL:$1|قديم بزاف 1|قديم بزاف $1}}',

# Book sources
'booksources' => 'مصادر كتاب',
'booksources-search-legend' => 'حوس ما بين مصادر الكتب',
'booksources-go' => 'اذهب',

# Special:Log
'log' => 'ريجيسترات العمليات',

# Special:AllPages
'allpages' => 'قاع الباجات',
'alphaindexline' => '$1 إلى $2',
'allarticles' => 'قاع الباجات',
'allpagessubmit' => 'روح',

# Special:Categories
'categories' => 'تصنيفات',

# Special:LinkSearch
'linksearch-line' => '$1 موصولة من $2',

# Special:ListGroupRights
'listgrouprights-members' => '(ليسته الأعضاء)',

# Email user
'emailuser' => 'ابعث بريه لهاذ المستخدم',

# Watchlist
'watchlist' => 'ليستة نتاع التابعه',
'mywatchlist' => 'ليستة نتاع التابعه',
'watchlistfor2' => 'ل$1 ($2)',
'watch' => 'تبع',
'unwatch' => 'ما تزيدش تعس',
'watchlist-details' => '{{PLURAL:$1||باجه وحده|زوج باجات|$1 باجات|$1 باجه }} في ليستت مراقبتك، بلا ما تعد باجات النقاش.',
'wlshowlast' => 'بين آخر $1 سوايع $2 يامات$3',
'watchlist-options' => 'ابسيون ليستت المراقبه',

# Delete
'actioncomplete' => 'العمليه اندارت',
'actionfailed' => 'العمليه فشلت',
'dellogpage' => 'ريجيستر محو الباجات',

# Rollback
'rollbacklink' => 'ولي',

# Protect
'protectlogpage' => 'ريجيستر الحمايه',
'protectedarticle' => 'راه حمى "[[$1]]"',

# Undelete
'undeletelink' => 'شوف/رجع',
'undeleteviewlink' => 'شوف',

# Namespace form on various pages
'namespace' => 'بلاصه تع أسموات',
'invert' => 'اعكس التخيار',
'blanknamespace' => 'أساسي',

# Contributions
'contributions' => 'مساهمات {{GENDER:$1|المستخدم|المستخدمه}}',
'contributions-title' => 'مساهمات {{GENDER:$1|المستخدم|المستخدمه}} $1',
'mycontris' => 'مساهماتي',
'contribsub2' => 'ل$1 ($2)',
'uctop' => 'ذ الوقت',
'month' => 'من شهر (وأقدم):',
'year' => 'من عام (وأقدم):',

'sp-contributions-newbies' => 'اعرض مشاركات الحسابات الجديده برك',
'sp-contributions-blocklog' => 'ريجيسترالمنع',
'sp-contributions-uploads' => 'مرفوعات',
'sp-contributions-logs' => 'ريجيسترات',
'sp-contributions-talk' => 'نقاش',
'sp-contributions-search' => 'تفتاش المشاركات',
'sp-contributions-username' => 'عنوان أيبي والال اسم مستخدم:',
'sp-contributions-toponly' => 'ما تبين غير المشاركات التوالا نتاع المقالات',
'sp-contributions-submit' => 'تفتاش',

# What links here
'whatlinkshere' => 'واش يوصل هنا',
'whatlinkshere-title' => 'الباجات اللي تقين في "$1"',
'whatlinkshere-page' => 'الباجه:',
'linkshere' => "هاذ الباجات يوصلو إلى '''[[:$1]]''':",
'nolinkshere' => "ما كانش  باجه فيها وصيله ل'''[[:$1]]'''.",
'isredirect' => 'باجت تحويل',
'istemplate' => 'تضمين',
'isimage' => 'وصيلة ملف',
'whatlinkshere-prev' => '{{PLURAL:$1|التالي|ال$1 التاليه}}',
'whatlinkshere-next' => '{{PLURAL:$1|الجايه|ال$1 الجايه}}',
'whatlinkshere-links' => '← وصيلات',
'whatlinkshere-hideredirs' => '$1 التحويلات',
'whatlinkshere-hidetrans' => '$1 التضمينات',
'whatlinkshere-hidelinks' => '$1 الوصيلات',
'whatlinkshere-hideimages' => '$1 وصيلات الفيشيات',
'whatlinkshere-filters' => 'صفايات',

# Block/unblock
'ipboptions' => 'ساعتين:2 hours,نهار واحد:1 day,3 نهارات:3 days,سيمانة وحدة:1 week,سيمانتين:2 weeks,شهر واحد:1 month,3 أشهر:3 months,6 أشهر:6 months,عام واحد:1 year,دايم:infinite',
'ipblocklist' => 'المستخدمون الممنوعون',
'blocklink' => 'حبس',
'unblocklink' => 'ديبلوكي',
'change-blocklink' => 'بدل البلوكاج',
'contribslink' => 'المساهمات',
'blocklogpage' => 'ريجيسترالمنع',
'blocklogentry' => 'منع "[[$1]]" لفترة زمنية مدتها $2 $3',
'block-log-flags-nocreate' => 'صنعت الحسابات ممنوعه',

# Move page
'movelogpage' => 'روجيستر التنقال',
'revertmove' => 'رجع',

# Export
'export' => 'صدر الباجه',

# Namespace 8 related
'allmessagesname' => 'الاسم',
'allmessagesdefault' => 'الكتبه الافتراضيه',

# Thumbnails
'thumbnail-more' => 'كبر',
'thumbnail_error' => 'غلطه في خدمت صورة مصغرةالمينياتير: $1',

# Tooltip help for the actions
'tooltip-pt-userpage' => 'باجتك نتع مستعمل',
'tooltip-pt-mytalk' => 'باجه نتع نقاشاتك',
'tooltip-pt-preferences' => 'وش خيرت',
'tooltip-pt-watchlist' => 'ليستت الباجات الي راك أتبع تبديلاتهم',
'tooltip-pt-mycontris' => 'ليسته نتع مساهماتك',
'tooltip-pt-login' => 'مادابيك تسجل الدخول تاعك، بصّح ماشي ملزوم عليك',
'tooltip-pt-logout' => 'سجل خروج',
'tooltip-ca-talk' => 'نقاش على باجت المحتوى',
'tooltip-ca-edit' => 'تنجم تحرر هاذ الباجه ،ماذابيك تستعمل قفله المراجعه قبل ما تحفظ',
'tooltip-ca-addsection' => 'ابدأ طرف جديد',
'tooltip-ca-viewsource' => 'هاذ الباجه محميه. و شنو تقدرو تشوفو الأصلي نتاعها',
'tooltip-ca-history' => 'المراجعات التوالى نتاع الباجه (مع المساهمين نتاوعها)',
'tooltip-ca-protect' => 'بروتيجي هاذالباجه',
'tooltip-ca-delete' => 'امحي هاذ الباجه',
'tooltip-ca-move' => 'بدل أسم هذ الباجه',
'tooltip-ca-watch' => 'زيد هذ الباجه لليستتك نتاع التتباع',
'tooltip-ca-unwatch' => 'اقلع هاذ الباجه من الليسته نتاع التتباع',
'tooltip-search' => ' فتّش في {{SITENAME}}',
'tooltip-search-go' => 'روح الباجه عندها نفس الآسم إذا كانت كاينه',
'tooltip-search-fulltext' => 'فتّش على باجه بهاد الكتبة',
'tooltip-p-logo' => 'روح للباجه اللولانيّه',
'tooltip-n-mainpage' => 'زور الباجه اللوله',
'tooltip-n-mainpage-description' => 'زور الباجه لوله',
'tooltip-n-portal' => 'على الپروجي،واش تنجم تدير، وين تصيب واش تحتاج',
'tooltip-n-currentevents' => 'تحواس على معلومات أساسية لصوالح صراو ذروك',
'tooltip-n-recentchanges' => 'الليستة تاع التبديلات التوالا فل ويكي',
'tooltip-n-randompage' => 'طلّع باجه على الزهر',
'tooltip-n-help' => 'بلاصة المعونة',
'tooltip-t-whatlinkshere' => 'ليسته نتاع قاع باجات المحتوى الي توصل هنا',
'tooltip-t-recentchangeslinked' => 'ليسته نتاع التبديلات التواله نتاع الباجات الي عندهم علاقه بهاذي',
'tooltip-feed-atom' => 'سيلان آتوم نتاع الباجه',
'tooltip-t-contributions' => 'شوفان ليسته مساهمات هاذا المستخدم',
'tooltip-t-emailuser' => 'أرسل بريه لهاذ المستخدم',
'tooltip-t-upload' => 'أرسل تصويرة و إلا أي ملف ميديا للسرفر',
'tooltip-t-specialpages' => 'ليستة تاع كامل الباجات الخصوصيّة',
'tooltip-t-print' => 'نسخه لهاذ الباجه قابله للطبيع',
'tooltip-t-permalink' => 'توصيله دايمه رايحه لهاذ النسخة نتاع الباجة',
'tooltip-ca-nstab-main' => 'شوف باجه المحتوى',
'tooltip-ca-nstab-user' => 'شوف باجت المستعمل',
'tooltip-ca-nstab-special' => 'هذه الباجه خصوصيه،ما تقدرش تبدل فيها',
'tooltip-ca-nstab-project' => 'شوف باجت البروجي',
'tooltip-ca-nstab-image' => 'شوف باجت الملف',
'tooltip-ca-nstab-template' => 'شوفان القالب',
'tooltip-ca-nstab-category' => 'شوفان باجة التصنيف',
'tooltip-minoredit' => 'ماركي هاذا تبديل صغير',
'tooltip-save' => 'سجل تبديلات نتاعك',
'tooltip-preview' => 'بين التغييرات نتاعك، من فضلك استخدم هذا قبل ما تنشر!',
'tooltip-diff' => 'تخلي الشوفان نتاع التبديلات اللي ندارو.',
'tooltip-compareselectedversions' => 'شوف الفروق بين نسختين مخيرين من هاذ الباجه.',
'tooltip-watch' => 'زيد هذ الباجه لليستتك نتاع التتباع',
'tooltip-rollback' => 'يولي : بدركة وحده تآنيلي التبديله و إلا التبديلات نتاع المساهم التالي',
'tooltip-undo' => '"نحّي" فاصي هاد الـمعاودة و حلّ تاقة تاع تبدال بشوفه قبلانيّه. تخلّي باش ترجع لل معاوده التاليه و تزيد الـسبّة علاش فل قابسه تاع الـحويصله.',
'tooltip-summary' => 'دخل تلخيص صغير',

# Browsing diffs
'previousdiff' => '→ التعديل الي قبل',
'nextdiff' => 'التبديل الجاي ←',

# Media information
'file-info-size' => '$1 × $2 بكسل حجم الملف: $3، نوع MIME: $4',
'file-nohires' => 'ما كانش دقه اكثر من هاك',
'svg-long-desc' => 'فيشيي SVG، أبعاده $1 × $2 بكسل، تاي الفيشي : $3',
'show-big-image' => 'تصويرة دقة عالية',

# Bad image list
'bad_image_list' => 'الفورمه كيما التابعة:
ما كاين غير السطور الّي باديين بل *، الّي يكونو معدودين
الـوصيل الـلوّل نتاع سطر لازم تكون تاع تصويرة ضايعة.
كامل الوصيلات لخرين الّي فل سطر، يكونو معدودين كلّي تتنيّات، بل كي الباجات وين الـفيشي يكون باين.',

# Metadata
'metadata' => 'بايان ميتا',
'metadata-help' => 'هذا الملف راه فيه معلومات زيادة، بالاك تكون انزادت من عند صواره نيميريك ولا سكانر مين صنع الملف.
الأصلي، شي تفاصيل بالاك ما تعبرش على الملف المعدل.',
'metadata-fields' => 'غادي ينعرض الحقل نتاع معطيات الميتا الكاينه في هاذ البريه في باجه التصويرة منين يكون جدول معطيات الميتا مطوياً.
الحقول لخره تكون مخبية بار ديفو.
* make
* model
* datetimeoriginal
* exposuretime
* fnumber
* isospeedratings
* focallength
* artist
* copyright
* imagedescription
* gpslatitude
* gpslongitude
* gpsaltitude',

# 'all' in various places, this might be different for inflected languages
'watchlistall2' => 'لكل',
'namespacesall' => 'لكل',
'monthsall' => 'لكل',

# Watchlist editing tools
'watchlisttools-view' => 'اعرض التبديلات المرتابطه',
'watchlisttools-edit' => 'اعرض قائمه المراقبه و عدلها',
'watchlisttools-raw' => 'موديفي ليستت التبيعه الخام',

# Core parser functions
'duplicate-defaultsort' => '\'\'\'توليه:\'\'\' مفتاح التستيف الافتراضي "$2" ديباسا مفتاح التستيف الافتراضي التالي"$1".',

# Special:SpecialPages
'specialpages' => 'الباجات الخصوصيه',

# External image whitelist
'external_image_whitelist' => ' #<pre>خلى هاذ السطر كيما راه
#حط منثورات التعبيرات المنتظمة (برك الجزء الي يروح بين //) بالتحت
#هاذ يكون مطابقتها مع مسارات التصاوير البرانيه (الموصولة بصفه مباشره)
#هاذي الي تشبهغادي تنعرض  كتصاور، خلاف هذا برك وصيلة للتصويرة غادي تنعرض
#السطور اللي تبدأا ب# تعتبر تعليقات
#هذا لا يتأثر بحالة الحروف

#حط كامل منثورات التعبيرات المنتظمة فوق هذا السطر. خلي هاذ السطر سواسوا كيما هو</pre>',

# Special:Tags
'tag-filter' => 'صفاية[[Special:Tags|الوشام]]:',

);
