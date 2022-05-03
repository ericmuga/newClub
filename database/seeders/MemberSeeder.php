<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\{Member,Attendee};
class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // Schema::create('members', function (Blueprint $table) {
        //     $table->bigIncrements('id');
        //     $table->string('name');
        //     $table->string('email')->unique();
        //     $table->string('phone')->unique();
        //     $table->enum('gender',['m','f']);
        //     $table->unsignedInteger('field_id');
        //     $table->unsignedInteger ('club_id');
        //     $table->timestamps();
        // });

        $data=[
                ['name'=>'A. Winnie Gor ','email'=>'winne.gor@gmail.com','phone'=>'0726811010','rotary_number'=>'11167662','nationality'=>'KE','field_id'=>1,'club_id'=>1],
                ['name'=>'Absaloms Antoinette ','email'=>'aabsaloms@gmail.com','phone'=>'0721602570','rotary_number'=>'5743361','nationality'=>'KE','field_id'=>2,'club_id'=>1],
                ['name'=>'Alosa Sam ','email'=>'mcalosa@gmail.com','phone'=>'0721393042','rotary_number'=>'11065891','nationality'=>'KE','field_id'=>3,'club_id'=>1],
                ['name'=>'Anyim Roselyne ','email'=>'rozzyanyim@gmail.com','phone'=>'0713235981','rotary_number'=>'10589399','nationality'=>'KE','field_id'=>4,'club_id'=>1],
                ['name'=>'Bore Nicholas ','email'=>'nickbore@bidii.com','phone'=>'0733630920','rotary_number'=>'5985578','nationality'=>'KE','field_id'=>5,'club_id'=>1],
                ['name'=>'Boyi Wedgett ','email'=>'Wedgettboyi@yahoo.co.uk','phone'=>'0763407258','rotary_number'=>'6679199','nationality'=>'KE','field_id'=>8,'club_id'=>1],
                ['name'=>'Chacha Bhoke  ','email'=>'bchacha@gmail.com','phone'=>'0723339178','rotary_number'=>'11065896','nationality'=>'KE','field_id'=>6,'club_id'=>1],
                ['name'=>'Chege Susan  ','email'=>'susan.w.chege@gmail.com','phone'=>'0722267562','rotary_number'=>'11065899','nationality'=>'KE','field_id'=>7,'club_id'=>1],
                ['name'=>'Chikarango Simbarashe ','email'=>'simbachikarango@gmail.com','phone'=>'0718454161','rotary_number'=>'8184792','nationality'=>'KE','field_id'=>8,'club_id'=>1],
                ['name'=>'Della Yvonne  ','email'=>'yvonnedellag@gmail.com','phone'=>'0724576982','rotary_number'=>'11237413','nationality'=>'KE','field_id'=>9,'club_id'=>1],
                ['name'=>'Esikhaty Alex ','email'=>'aesikhaty@gmail.com','phone'=>'0722973391','rotary_number'=>'10282015','nationality'=>'KE','field_id'=>25,'club_id'=>1],
                ['name'=>'Fidhow Abdi ','email'=>'abdi.dubat@hotmail.co.uk','phone'=>'0718944466','rotary_number'=>'10434457','nationality'=>'KE','field_id'=>10,'club_id'=>1],
                ['name'=>'Gachoya Jannet ','email'=>'jannet.w.gachoya@gmail.com','phone'=>'0704462826','rotary_number'=>'10722803','nationality'=>'KE','field_id'=>3,'club_id'=>1],
                ['name'=>'Gachuhi Maurice ','email'=>'mauricegachuhi@gmail.com','phone'=>'0722587187','rotary_number'=>'6972341','nationality'=>'KE','field_id'=>11,'club_id'=>1],
                ['name'=>'Gachui June ','email'=>'june@jgipconsultants.co.ke','phone'=>'0722956555','rotary_number'=>'6153616','nationality'=>'KE','field_id'=>3,'club_id'=>1],
                ['name'=>'Gathungu Faith ','email'=>'faith@youngengineers.co.ke','phone'=>'0722338954','rotary_number'=>'10722790','nationality'=>'KE','field_id'=>6,'club_id'=>1],
                ['name'=>'Gichohi Maina ','email'=>'maina.gichohi@gmail.com','phone'=>'0722974142','rotary_number'=>'6438115','nationality'=>'KE','field_id'=>15,'club_id'=>1],
                ['name'=>'Gichuhi Maureen ','email'=>'fuigichuhi@yahoo.com','phone'=>'0722716256','rotary_number'=>'6885574','nationality'=>'KE','field_id'=>12,'club_id'=>1],
                ['name'=>'Gikonyo Gitau ','email'=>'gikonyog@yahoo.com','phone'=>'0728886353','rotary_number'=>'8186229','nationality'=>'KE','field_id'=>3,'club_id'=>1],
                ['name'=>'Gitau Geoffrey ','email'=>'jeffgitau2000@yahoo.com','phone'=>'0722550625','rotary_number'=>'8577005','nationality'=>'KE','field_id'=>11,'club_id'=>1],
                ['name'=>'Githiaka Muchau ','email'=>'mgithiaka@izonsystems.co.ke','phone'=>'0722519972','rotary_number'=>'5820813','nationality'=>'KE','field_id'=>4,'club_id'=>1],
                ['name'=>'Githua Antony ','email'=>'tony0991@gmail.com','phone'=>'0723547584','rotary_number'=>'8074000','nationality'=>'KE','field_id'=>13,'club_id'=>1],
                ['name'=>'Githui Anita ','email'=>'agithui@gmail.com','phone'=>'0722732649','rotary_number'=>'8400960','nationality'=>'KE','field_id'=>4,'club_id'=>1],
                ['name'=>'Kabicho Ngina ','email'=>'kabichongina@gmail.com','phone'=>'0723655133','rotary_number'=>'10859891','nationality'=>'KE','field_id'=>8,'club_id'=>1],
                ['name'=>'Kagume Charlene ','email'=>'migwecharlene@gmail.com','phone'=>'0729533560','rotary_number'=>'11167652','nationality'=>'KE','field_id'=>14,'club_id'=>1],
                ['name'=>'Kanaga Faith ','email'=>'kanaga.fg@gmail.com','phone'=>'0734776413','rotary_number'=>'10191723','nationality'=>'KE','field_id'=>3,'club_id'=>1],
                ['name'=>'Karani Dickson ','email'=>'dixon@tiramid.com','phone'=>'0724234331','rotary_number'=>'9939573','nationality'=>'KE','field_id'=>4,'club_id'=>1],
                ['name'=>'Karanja Marion ','email'=>'marion_karanja@yahoo.com','phone'=>'0722780522','rotary_number'=>'6679195','nationality'=>'KE','field_id'=>3,'club_id'=>1],
                ['name'=>'Karanja Mururu ','email'=>'Mururu46@gmail.com','phone'=>'0719701346','rotary_number'=>'10191719','nationality'=>'KE','field_id'=>13,'club_id'=>1],
                ['name'=>'Kariuki Carolyn ','email'=>' Kariuki.kui@gmail.com','phone'=>'0722154742','rotary_number'=>'6438112','nationality'=>'KE','field_id'=>23,'club_id'=>1],
                ['name'=>'Kariuki David ','email'=>'dnkaris@gmail.com','phone'=>'0722517979','rotary_number'=>'8872752','nationality'=>'KE','field_id'=>9,'club_id'=>1],
                ['name'=>'Kariuki Peter ','email'=>'pskariuki@gmail.com','phone'=>'0722521659','rotary_number'=>'5743213','nationality'=>'KE','field_id'=>16,'club_id'=>1],
                ['name'=>'Kibati James ','email'=>'jkibati@gmail.com','phone'=>'0722200737','rotary_number'=>'11222336','nationality'=>'KE','field_id'=>25,'club_id'=>1],
                ['name'=>'Kilonzo Mutula ','email'=>'mutulakilonzojr@icloud.com','phone'=>'0722474695','rotary_number'=>'5820804','nationality'=>'KE','field_id'=>3,'club_id'=>1],
                ['name'=>'Kiluta Soli ','email'=>'solikiluta@gmail.com','phone'=>'0722517845','rotary_number'=>'10191714','nationality'=>'KE','field_id'=>17,'club_id'=>1],
                ['name'=>'Kimani Michael ','email'=>'mkimani@mgkconsult.co.ke','phone'=>'0722710450','rotary_number'=>'5743253','nationality'=>'KE','field_id'=>11,'club_id'=>1],
                ['name'=>'Kimani Wangari ','email'=>'wangarikimani.n@gmail.com','phone'=>'0726712699','rotary_number'=>'10434477','nationality'=>'KE','field_id'=>13,'club_id'=>1],
                ['name'=>'Kingori Michael ','email'=>'mking52@yahoo.com','phone'=>'0727029475','rotary_number'=>'9288950','nationality'=>'KE','field_id'=>29,'club_id'=>1],
                ['name'=>'Kiptoo Kenneth  ','email'=>'kiptanui.ken@gmail.com','phone'=>'0726724333','rotary_number'=>'10978246','nationality'=>'KE','field_id'=>4,'club_id'=>1],
                ['name'=>'Koks Sheila ','email'=>'sheilakoks@gmail.com','phone'=>'0722245335','rotary_number'=>'10404841','nationality'=>'KE','field_id'=>8,'club_id'=>1],
                ['name'=>'Labi Jimmy ','email'=>'jlabi1@yahoo.com','phone'=>'0722791984','rotary_number'=>'9939569','nationality'=>'KE','field_id'=>4,'club_id'=>1],
                ['name'=>'Lantum Moka ','email'=>'talk2moka@gmail.com','phone'=>'0715459584','rotary_number'=>'10457759','nationality'=>'KE','field_id'=>18,'club_id'=>1],
                ['name'=>'Lavuna Janet ','email'=>'jaylavuna@yahoo.com','phone'=>'0725448469','rotary_number'=>'8398607','nationality'=>'KE','field_id'=>3,'club_id'=>1],
                ['name'=>'Lugadiru Marlon ','email'=>'lugads@gmail.com','phone'=>'0722843135','rotary_number'=>'9097329','nationality'=>'KE','field_id'=>4,'club_id'=>1],
                ['name'=>'Madara Rossianna ','email'=>'xmadara@yahoo.com','phone'=>'02348130000000','rotary_number'=>'10722795','nationality'=>'KE','field_id'=>23,'club_id'=>1],
                ['name'=>'Maina Atanas ','email'=>'akmaina46@gmail.com','phone'=>'0722202020','rotary_number'=>'5820792','nationality'=>'KE','field_id'=>19,'club_id'=>1],
                ['name'=>'Maina Francis ','email'=>'wachiramaina08@gmail.com','phone'=>'0722230348','rotary_number'=>'8776459','nationality'=>'KE','field_id'=>20,'club_id'=>1],
                ['name'=>'Maingi  Sheila ','email'=>'sheilamaingi@gmail.com','phone'=>'0724570969','rotary_number'=>'11063028','nationality'=>'KE','field_id'=>19,'club_id'=>1],
                ['name'=>'Makatiani Kizito ','email'=>'Kizito@turnkeyafrica.com','phone'=>'0722516807','rotary_number'=>'6679194','nationality'=>'KE','field_id'=>4,'club_id'=>1],
                ['name'=>'Makau Karen ','email'=>'karenmakau@gmail.com','phone'=>'0725544401','rotary_number'=>'10404840','nationality'=>'KE','field_id'=>30,'club_id'=>1],
                ['name'=>'Manjeru Emily ','email'=>'emilymanjeru@gmail.com','phone'=>'0724926269','rotary_number'=>'10722793','nationality'=>'KE','field_id'=>13,'club_id'=>1],
                ['name'=>'Mapesa Jacqueline ','email'=>'jacquemapesa@gmail.com','phone'=>'0780604000','rotary_number'=>'10282027','nationality'=>'KE','field_id'=>8,'club_id'=>1],
                ['name'=>'Mathare Josphat ','email'=>'muchai.mathare@gmail.com','phone'=>'0722788413','rotary_number'=>'8398601','nationality'=>'KE','field_id'=>4,'club_id'=>1],
                ['name'=>'Mbatia Joy ','email'=>'joymbatia@rocketmail.com','phone'=>'0739279342','rotary_number'=>'11237364','nationality'=>'KE','field_id'=>8,'club_id'=>1],
                ['name'=>'Mbeda Paveen ','email'=>'paveenmbeda@yahoo.com','phone'=>'0701678275','rotary_number'=>'9825490','nationality'=>'KE','field_id'=>23,'club_id'=>1],
                ['name'=>'Mburu Bashir ','email'=>'bashirmburu@gmail.com','phone'=>'0720722722','rotary_number'=>'5743205','nationality'=>'KE','field_id'=>6,'club_id'=>1],
                ['name'=>'Mburu Caroline ','email'=>'loracmburu@gmail.com','phone'=>'0722891098','rotary_number'=>'10097861','nationality'=>'KE','field_id'=>8,'club_id'=>1],
                ['name'=>'Migwi Sarah ','email'=>'sarah@protelstudios.com','phone'=>'0722892559','rotary_number'=>'6184321','nationality'=>'KE','field_id'=>21,'club_id'=>1],
                ['name'=>'Mitaru Anne ','email'=>'amitaru@yahoo.com','phone'=>'0720927664','rotary_number'=>'8577003','nationality'=>'KE','field_id'=>3,'club_id'=>1],
                ['name'=>'Montet Sailepu ','email'=>'sailepu@gmail.com','phone'=>'0721951401','rotary_number'=>'6885575','nationality'=>'KE','field_id'=>8,'club_id'=>1],
                ['name'=>'Muchai Annie ','email'=>'anniemuchai@gmail.com','phone'=>'0725333391','rotary_number'=>'6972347','nationality'=>'KE','field_id'=>31,'club_id'=>1],
                ['name'=>'Muchemi Mona ','email'=>'mona.nya@octoberconsult.com','phone'=>'0789356912','rotary_number'=>'10282016','nationality'=>'KE','field_id'=>23,'club_id'=>1],
                ['name'=>'Mugo Edward ','email'=>'emugo2001@gmail.com','phone'=>'0722522651','rotary_number'=>'5743227','nationality'=>'KE','field_id'=>23,'club_id'=>1],
                ['name'=>'Muia Nzilani ','email'=>'nzilani90@gmail.com','phone'=>'0725624460','rotary_number'=>'10859884','nationality'=>'KE','field_id'=>9,'club_id'=>1],
                ['name'=>'Muiruri Wambui ','email'=>'cinjumuiruri@gmail.com','phone'=>'0713639325','rotary_number'=>'10434480','nationality'=>'KE','field_id'=>23,'club_id'=>1],
                ['name'=>'Mumbi Mary Anne ','email'=>'mumbimot@gmail.com','phone'=>'0722370054','rotary_number'=>'10978212','nationality'=>'KE','field_id'=>33,'club_id'=>1],
                ['name'=>'Mungoma Timothy ','email'=>'timothy.mungoma@gmail.com','phone'=>'0723729842','rotary_number'=>'11237918','nationality'=>'KE','field_id'=>4,'club_id'=>1],
                ['name'=>'Muraya Joy ','email'=>'wanjajoyce@gmail.com','phone'=>'0721466267','rotary_number'=>'10282022','nationality'=>'KE','field_id'=>21,'club_id'=>1],
                ['name'=>'Mureithi Patience ','email'=>'tpatiencewairimu@gmail.com','phone'=>'0703106546','rotary_number'=>'9950312','nationality'=>'KE','field_id'=>22,'club_id'=>1],
                ['name'=>'Murichu Grace ','email'=>'gnmurichu@gmail.com','phone'=>'0722729419','rotary_number'=>'5743221','nationality'=>'KE','field_id'=>19,'club_id'=>1],
                ['name'=>'Murugi Immaculate ','email'=>'murugiimmaculate@gmail.com','phone'=>'0711349771','rotary_number'=>'10097865','nationality'=>'KE','field_id'=>21,'club_id'=>1],
                ['name'=>'Musangi Joseph ','email'=>'joe.musangi@hotmail.com','phone'=>'0722719395','rotary_number'=>'6091303','nationality'=>'KE','field_id'=>14,'club_id'=>1],
                ['name'=>'Mutero Jeremy ','email'=>'mashmutero@yahoo.com','phone'=>'0722636119','rotary_number'=>'6184325','nationality'=>'KE','field_id'=>3,'club_id'=>1],
                ['name'=>'Muthii Joshua ','email'=>'joshmuthii@gmail.com','phone'=>'0722981614','rotary_number'=>'10282024','nationality'=>'KE','field_id'=>6,'club_id'=>1],
                ['name'=>'Muthusi Ivy ','email'=>'kateeimuts@yahoo.com','phone'=>'0722850808','rotary_number'=>'9288928','nationality'=>'KE','field_id'=>9,'club_id'=>1],
                ['name'=>'Mutua Mercy ','email'=>'mercy_mutua@yahoo.com ','phone'=>'0721486351','rotary_number'=>'6859524','nationality'=>'KE','field_id'=>8,'club_id'=>1],
                ['name'=>'Muturi Elizabeth  ','email'=>'qalibmanagement@gmail.com','phone'=>'0722634633','rotary_number'=>'11237407','nationality'=>'KE','field_id'=>13,'club_id'=>1],
                ['name'=>'Mwaka Edna ','email'=>'mwongeli1@gmail.com','phone'=>'0720331109','rotary_number'=>'9939577','nationality'=>'KE','field_id'=>8,'club_id'=>1],
                ['name'=>'Mwake Immaculate ','email'=>'immacq@gmail.com','phone'=>'0724351995','rotary_number'=>'9939570','nationality'=>'KE','field_id'=>8,'club_id'=>1],
                ['name'=>'Mwirigi Fred ','email'=>'fmgambi@gmail.com','phone'=>'0720966396','rotary_number'=>'8567403','nationality'=>'KE','field_id'=>6,'club_id'=>1],
                ['name'=>'Ndirango Alexandra ','email'=>'alexandra.ndirango@gmail.com','phone'=>'0727843853','rotary_number'=>'8544234','nationality'=>'KE','field_id'=>8,'club_id'=>1],
                ['name'=>'Ndirangu Dennis ','email'=>'ndirangudennis2@gmail.com','phone'=>'0715679583','rotary_number'=>'9825486','nationality'=>'KE','field_id'=>3,'club_id'=>1],
                ['name'=>'Ndiritu Samuel ','email'=>'ndiritugs@gmail.com','phone'=>'0722341208','rotary_number'=>'6024654','nationality'=>'KE','field_id'=>34,'club_id'=>1],
                ['name'=>'Ngesa Rosemary ','email'=>'marieroseod@yahoo.com','phone'=>'0727797678','rotary_number'=>'10978235','nationality'=>'KE','field_id'=>24,'club_id'=>1],
                ['name'=>'Ngile Rosana ','email'=>'munyiva.ngile@gmail.com','phone'=>'0720279158','rotary_number'=>'10434479','nationality'=>'KE','field_id'=>23,'club_id'=>1],
                ['name'=>'Njenga Monica ','email'=>'mnjenga_w@yahoo.com','phone'=>'0722996767','rotary_number'=>'6972346','nationality'=>'KE','field_id'=>7,'club_id'=>1],
                ['name'=>'Njonjo Maina ','email'=>'mainanjonjo@yahoo.co.uk','phone'=>'0722843346','rotary_number'=>'6021771','nationality'=>'KE','field_id'=>3,'club_id'=>1],
                ['name'=>'Njoroge David  ','email'=>'dmnjoroge@gmail.com','phone'=>'0763958823','rotary_number'=>'11166893','nationality'=>'KE','field_id'=>8,'club_id'=>1],
                ['name'=>'Njoroge Gladys Njoki ','email'=>'gnjokinjoroge@gmail.com','phone'=>'0719756838','rotary_number'=>'10978226','nationality'=>'KE','field_id'=>4,'club_id'=>1],
                ['name'=>'Njoroge Rosalid ','email'=>'rosalidn@gmail.com','phone'=>'0722705077','rotary_number'=>'10722798','nationality'=>'KE','field_id'=>8,'club_id'=>1],
                ['name'=>'Njoroge Serah ','email'=>'Snjoroge2001@yahoo.com','phone'=>'0722247701','rotary_number'=>'6679198','nationality'=>'KE','field_id'=>16,'club_id'=>1],
                ['name'=>'Njoroge-Muriithi Esther ','email'=>'ennjoroge@icloud.com','phone'=>'0737431046','rotary_number'=>'10404835','nationality'=>'KE','field_id'=>18,'club_id'=>1],
                ['name'=>'Njuguna Oscar ','email'=>'oscar.njuguna@gmail.com','phone'=>'0721901111','rotary_number'=>'6686298','nationality'=>'KE','field_id'=>35,'club_id'=>1],
                ['name'=>'Nyaga Alex ','email'=>'anyaga@parapetcleaning.com','phone'=>'0722521824','rotary_number'=>'5737359','nationality'=>'KE','field_id'=>26,'club_id'=>1],
                ['name'=>'Nyamu Jim ','email'=>'jimjustusnyamu@gmail.com','phone'=>'0723398190','rotary_number'=>'10859874','nationality'=>'KE','field_id'=>27,'club_id'=>1],
                ['name'=>'Nyeretse Anne-Simone ','email'=>'nyeretseannesimone@gmail.com','phone'=>'0790254496','rotary_number'=>'10434442','nationality'=>'KE','field_id'=>13,'club_id'=>1],
                ['name'=>'Obino Christine ','email'=>'obino.christie@gmail.com','phone'=>'0721601859','rotary_number'=>'11237399','nationality'=>'KE','field_id'=>13,'club_id'=>1],
                ['name'=>'Ochieng Berry ','email'=>'berryliman@gmail.com','phone'=>'0721898039','rotary_number'=>'10589403','nationality'=>'KE','field_id'=>36,'club_id'=>1],
                ['name'=>'Odida David ','email'=>'davinciodida@yahoo.co.uk','phone'=>'0728231745','rotary_number'=>'10282013','nationality'=>'KE','field_id'=>25,'club_id'=>1],
                ['name'=>'Ogana Loretta  ','email'=>'khamuruogana@gmail.com','phone'=>'0711464354','rotary_number'=>'11237453','nationality'=>'KE','field_id'=>3,'club_id'=>1],
                ['name'=>'Ogolla Christian ','email'=>'Ogollachristian@yahoo.co.uk','phone'=>'0722222756','rotary_number'=>'8995165','nationality'=>'KE','field_id'=>20,'club_id'=>1],
                ['name'=>'Okello Anne ','email'=>'annemkan@gmail.com','phone'=>'0723600139','rotary_number'=>'10282026','nationality'=>'KE','field_id'=>3,'club_id'=>1],
                ['name'=>'Okuja Allan ','email'=>'okujaallan@gmail.com','phone'=>'0700366548','rotary_number'=>'9499114','nationality'=>'KE','field_id'=>11,'club_id'=>1],
                ['name'=>'Olbara Caroline ','email'=>'carol.olby@gmail.com','phone'=>'0717968342','rotary_number'=>'8147098','nationality'=>'KE','field_id'=>6,'club_id'=>1],
                ['name'=>'Omondi Nashon ','email'=>'nashon.omondi@hsc.co.ke','phone'=>'0722410798','rotary_number'=>'6342337','nationality'=>'KE','field_id'=>13,'club_id'=>1],
                ['name'=>'Onyango Janet ','email'=>'janetonyango@gmail.com','phone'=>'0722606731','rotary_number'=>'6438104','nationality'=>'KE','field_id'=>21,'club_id'=>1],
                ['name'=>'Opuch Winnie ','email'=>'winnie.opuch@gmail.com','phone'=>'0729275042','rotary_number'=>'10282020','nationality'=>'KE','field_id'=>34,'club_id'=>1],
                ['name'=>'Otiende Julie ','email'=>'otiendejulie@yahoo.com','phone'=>'0722263073','rotary_number'=>'10585669','nationality'=>'KE','field_id'=>8,'club_id'=>1],
                ['name'=>'Ouma Beryl ','email'=>'nyangiouma12@yahoo.com','phone'=>'0721818879','rotary_number'=>'5743203','nationality'=>'KE','field_id'=>3,'club_id'=>1],
                ['name'=>'Ouma Erick ','email'=>'esangoro@gmail.com','phone'=>'0722678070','rotary_number'=>'9212480','nationality'=>'KE','field_id'=>28,'club_id'=>1],
                ['name'=>'Outa Doreen ','email'=>'banda.doreen@outlook.com','phone'=>'0726764704','rotary_number'=>'10434471','nationality'=>'KE','field_id'=>3,'club_id'=>1],
                ['name'=>'Peres Quinter ','email'=>'quinterakinyi4@gmail.com','phone'=>'0733935100','rotary_number'=>'8931795','nationality'=>'KE','field_id'=>23,'club_id'=>1],
                ['name'=>'Rachier Olivia ','email'=>'oorachier@gmail.com','phone'=>'0722679083','rotary_number'=>'11237410','nationality'=>'KE','field_id'=>3,'club_id'=>1],
                ['name'=>'Rienye June ','email'=>'junjoroge@gmail.com','phone'=>'0721807942','rotary_number'=>'6050341','nationality'=>'KE','field_id'=>3,'club_id'=>1],
                ['name'=>'Thirima John ','email'=>'gachinuj@gmail.com','phone'=>'0715496742','rotary_number'=>'11237916','nationality'=>'KE','field_id'=>34,'club_id'=>1],
                ['name'=>'Tsisika Vivian ','email'=>'vivianperose@yahoo.com','phone'=>'0722799202','rotary_number'=>'8522589','nationality'=>'KE','field_id'=>7,'club_id'=>1],
                ['name'=>'Tukai Anthony ','email'=>'tonytukai@gmail.com','phone'=>'0700120156','rotary_number'=>'9144820','nationality'=>'KE','field_id'=>37,'club_id'=>1],
                ['name'=>'Wachira Anthony ','email'=>'tony.wachira@gmail.com','phone'=>'0721491095','rotary_number'=>'6859520','nationality'=>'KE','field_id'=>20,'club_id'=>1],
                ['name'=>'Wachira Sam ','email'=>'Samuel.Kamau@kenindus.com','phone'=>'0708194377','rotary_number'=>'10859870','nationality'=>'KE','field_id'=>4,'club_id'=>1],
                ['name'=>'Wagura Josphat ','email'=>'josphat.wagura@yahoo.com','phone'=>'0722272543','rotary_number'=>'9825487','nationality'=>'KE','field_id'=>10,'club_id'=>1],
                ['name'=>'Wainaina Andrew ','email'=>'andrew.wainaina@gmail.com','phone'=>'0726632554','rotary_number'=>'8776465','nationality'=>'KE','field_id'=>4,'club_id'=>1],
                ['name'=>'Wainaina Wambui ','email'=>'wambui.wainaina@gmail.com','phone'=>'0729809289','rotary_number'=>'9208152','nationality'=>'KE','field_id'=>7,'club_id'=>1],
                ['name'=>'Wairia Wanjiku','email'=>'wanjiku@wanjiku.pro','phone'=>'0722514310','rotary_number'=>'8314237','nationality'=>'KE','field_id'=>35,'club_id'=>1],
                ['name'=>'Waithaka Samson ','email'=>'swaithaka@gmail.com','phone'=>'0722622158','rotary_number'=>'10434465','nationality'=>'KE','field_id'=>27,'club_id'=>1],
                ['name'=>'Wakaba Robert ','email'=>'rwakaba@gmail.com','phone'=>'0721215251','rotary_number'=>'8398604','nationality'=>'KE','field_id'=>13,'club_id'=>1],
                ['name'=>'Wambui Elizabeth ','email'=>'wnjeri81@gmail.com','phone'=>'0721449617','rotary_number'=>'10978243','nationality'=>'KE','field_id'=>3,'club_id'=>1],
                ['name'=>'Wanjero Isaac ','email'=>'isaacwanjero@yahoo.com','phone'=>'0710822111','rotary_number'=>'6736090','nationality'=>'KE','field_id'=>3,'club_id'=>1],
                ['name'=>'Waweru Josephat ','email'=>'josephatwaweru@rocketmail.com','phone'=>'0721902450','rotary_number'=>'10859880','nationality'=>'KE','field_id'=>4,'club_id'=>1],
                ['name'=>'Waweru Kagema ','email'=>'Katamajw@gmail.com','phone'=>'0725829699','rotary_number'=>'10191712','nationality'=>'KE','field_id'=>7,'club_id'=>1],

              ];
            DB::table('members')->insert($data);


            // $members=Member::all();
            // foreach ($members as $member){
            //     Attendee::create(['attendable_id'=>$member->id,'attendable_type'=>'member']);
            // }
        // DB::table('members')
        //   ->insert([
        //       'name'=>'Eric Muga',
        //       'email'=>'eric.muga@gmail.com',
        //       'phone'=>'0720816931',
        //       'gender'=>'m',
        //       'field_id'=>4,
        //       'club_id'=>1,
        //       'rotary_number'=>1,
        //     ]);
    }
}
