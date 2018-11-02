@extends('en.layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                @endif
                                <small>You can use only "gmail" registration.</small>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('zipcode') ? ' has-error' : '' }}">
                            <label for="zipcode" class="col-md-4 control-label">Zipcode</label>

                            <div class="col-md-6">
                                <input id="zipcode" type="text" class="form-control" name="zipcode" value="{{ old('zipcode') }}" required>

                                @if ($errors->has('zipcode'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('zipcode') }}</strong>
                                </span>
                                @endif
                                <small>ex.111−1111</small>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                            <label for="address" class="col-md-4 control-label">Address</label>

                            <div class="col-md-6">
                                <input id="address" type="text" class="form-control" name="address" value="{{ old('address') }}" required>

                                @if ($errors->has('address'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('address') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('tel') ? ' has-error' : '' }}">
                            <label for="tel" class="col-md-4 control-label">Tel</label>
                            <div class="col-md-6">
                                <input id="tel" type="text" class="form-control" name="tel" value="{{ old('tel') }}" required>
                                @if ($errors->has('tel'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('tel') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="gender" class="col-md-4 control-label">Gender</label>
                            <div class="col-md-6">
                                <input id="male" class="hidden" type="radio" name="gender" value="男" required>
                                <label for="male" class="checkbox-label"></label>
                                <span>Male</span>
                                <input id="female"  class="hidden" type="radio" name="gender" value="女" required>
                                <label for="female" class="checkbox-label"></label>
                                <span>Female</span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="birthday" class="col-md-4 control-label">Birthday</label>
                            <div class="col-md-6">
                                <input id="birthday" type="date" class="form-control" name="birthday" value="1980-01-01">
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Password confirm</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>
                        @if(isset($_GET['ref']))
                        <input type="hidden" name="ref" value="{{$_GET['ref']}}">
                        @else
                        <input type="hidden" name="ref" value="">
                        @endif

                        <div class="consent-form">
                            <h3>Consent Form</h3>
                            <ul class="nav nav-tabs">
         <li class="nav-item">
          <a href="#tab1" class="nav-link active" data-toggle="tab">English</a>
        </li>
        <li class="nav-item">
          <a href="#tab2" class="nav-link" data-toggle="tab">日本語</a>
        </li>
      </ul>
                           <div class="tab-content">
                            <div id="tab1" class="tab-pane active">
                                <pre>
Software license agreement
The person who is licensed by Rad Solutions Limited (hereinafter referred to as "A") and the web user interface "Savannah FX" (the "Software") (hereinafter referred to as "Party B") shall, Sign a software license agreement.

Article 1 (License Agreement)
1. Licensee grants to Licensee the use of the Software for free (hereinafter referred to as "License").
2. A will provide the updated version and version upgrade version of the Software to the Client, which shall also be included in the Software.
3 The right to use this software for permission shall be monopolistic and shall not be re-permitted, non-transferable
4 With this permission, the medium on which the Software is recorded, which is provided by Party B, is lent to Party B, and ownership shall belong to Party A.

Article 2 (attribution of rights)
(1) You acknowledge that the copyright and other intellectual property rights (hereinafter simply referred to as "copyright, etc.") relating to this software and attached document belong to A. By the conclusion of this Agreement, the copyright, etc. of the Software will not be transferred to the Party B.
2 As for the copyright, etc. of the part customized for Party B based on Article 4, Paragraph 1, as in the preceding paragraph, it shall not be in the User B unless otherwise stipulated. However, we shall not use the trade secrets of the other parties contained in the customized part and the materials provided by the parties for other purposes.

Article 3 (Prohibited matter)
As long as there is no prior written consent from the Party A, the Party B shall not conduct the acts specified in the following items.
(1) To use this software for purposes other than to use for the business of the second party.
(2) Lending, assigning, leasing, renting, sub-licensing the right to use this software to a third party.
(3) copy, modify, distribute on the network, perform other copyright law acts, reverse assemble or decompile, or reverse engineer other methods.
(4) To announce the performance of this software.

Article 4 (non-guarantee)
(1) In the event that the Software is provided on a recording medium and the Company discovers any material physical defects in the medium within 14 days after the delivery of the Software, the Party B shall notify Party A of such period , The defect shall be notified in writing. In this case, A will exchange the medium for free. Mr. A's responsibility on the recording medium shall be all with or without intentional negligence by A, as provided in this paragraph.
2 Notwithstanding the preceding paragraph, with respect to the Software, Party A shall be provided "as is" as is, and A will not bear any warranty liability and warranty liability for this Software. However, if you discover errors in this software and notify you of the defect, we will endeavor to make modifications that we deem appropriate, within reasonable time.
3. Party A may not grant to You an error, malfunction, error or other failure, no breach of the rights of third parties, merchantability, the specific purpose of third party or third party , Or any other matters not expressly set forth in this Agreement.
In addition, we shall not bear any responsibility for the result of the use of this software or the result of failure by the user to use it.

Article 5 (Warranty)
1. During the term of this Agreement, Licensee will ensure that the Software will run in accordance with the specifications of the Software separately determined by the Party in the environment specified by A.
(2) If the Software does not operate in accordance with the provisions of the preceding paragraph, Party A shall provide the substitute item only to the Company within twelve months after delivery of the Software.
3. Notwithstanding the provisions of each of the preceding paragraphs, if the nonconformity of specifications of this software arises in any of the following cases, A does not assume any responsibility for this specification non-conformity to the user.
(1) In the case where the specification nonconformity is caused by a combination of the software and a third party's software, or a network malfunction
(2) When this software is used in an environment or condition different from the operating environment or operating condition specified by A
(3) When this software has been altered by a party other than A, without the consent of A
(4) Other cases, due to reasons not attributable to the responsibility of A
4. The provisions of this section stipulate the responsibility of Akasa regarding all defects, defects and warranties of this software, and, regardless of the reasons, we shall notify you of any matter other than this section We do not guarantee anything and we are not responsible.

Article 6 (Licensee's obligation)
(1) You shall secure and maintain the environment of the hardware, peripherals, operating systems, etc. of computers etc. that meet the specifications necessary for running this software in their own responsibility and cost.
(2) In the event that you fail to fulfill the obligation under the preceding paragraph, Party A shall not be held liable for defect warranty liability, quality assurance liability, or any other responsibility.





Article 7 (infringement of rights by third parties)
1 In the event that a third party finds that a third party infringes all or part of the copyright, etc. relating to the Software and the attached document, the Party B promptly notifies the Company of the infringement And shall assist and cooperate with A in response to measures taken by A on behalf of the copyright, etc. to be protected.
2. In the case referred to in the preceding paragraph, Party A reserves the right to take necessary measures, such as an injunction against said third party, to eliminate the infringement acts of said third party.

Article 8 (Limitation of Liability)
In no event shall X shall not be liable to you for any damages resulting from indirect, derivative, lost profits, special circumstances (with or without prior notice by the occurrence of damage), data loss, We do not assume any stated monetary responsibility.

Article 9 (Prohibition of Assignment)
1 You shall not be able to transfer the status under this Agreement and the rights and obligations under this Agreement to a third party without prior consent.
2. In case of transferring the business pertaining to this Agreement to other person for the purpose of restructuring the business or other business restructuring, Party A may not transfer, without the consent of Party B, the position under this Agreement, the copyright of the Software, etc. and the use of the Software You can transfer the license right to a third party.

Article 10 (Term of Contract)
The contract term of this contract shall be two years from the date of the conclusion of the contract, and unless AZori or Licensee expressly declares otherwise in writing, etc. in writing to the other party by three months prior to the expiration of the said contract It shall be extended for one year and shall be automatically renewed thereafter as well.

Article 11 (Termination of contract)
When the following reasons occur with respect to Party B, you may cancel this Agreement without giving notice to Party B. In this case, you will naturally lose the benefit of the deadline and this permission will naturally be terminated.
(1) When this Agreement violates
(2) When a handset or a check fails
(3) When there is a petition for bankruptcy, special liquidation, company reorganization, civil rehabilitation, or when suspension of payment is made
(4) When infringing the copyright and other rights of A's relating to this software, or contesting the attribution of rights to A




Article 12 (Measures etc after the Contract)
(1) Upon termination of this Agreement, you shall cancel the use of the Software and perform the cancellation procedure. In addition, Party B shall return the medium and data that recorded the Software to the Party.
2 Even after the termination of this Agreement, you agree not to sublicense the whole or any part of this Agreement to any of the following items: Article 2 (Rights attribution), Article 4 (Non-Guarantee), Article 8 (Limitation of Liability), Article 9 (Prohibition of Assignment), Article 13 (Confidentiality) And the provisions of Article 14 (jurisdiction of agreement) will survive.

Article 13 (Confidentiality)
(1) A and B retain their secrets with respect to technology, business, or business information (hereinafter referred to as "Confidential Information") disclosed by the other party with respect to the performance of this Agreement with the attention of a good administrator Shall not be used outside the purpose of this Agreement and shall not disclose Confidential Information to a third party.
2 Notwithstanding the preceding paragraph, the following information shall not be included in confidential information.
(1) Those that have become known due to reasons not already known or attributable to own responsibility
(2) those already held at the time of receiving disclosure from the other party
(3) Thoroughly obtained from a third party without obligation of confidentiality
(4) What was accepted by the other party in writing
3 The confidentiality obligation of this Article shall survive the termination of this Agreement.

Article 14 (Law interpretation) 
This agreement is in accordance with Japanese law and interpreted in accordance with Japanese law

Article 15 (Competent jurisdiction)
Any dispute concerning this Agreement (including the court 's mediation procedure) agrees to make the Tokyo Summary Court or Tokyo District Court the First Instance' s exclusive agreement jurisdiction court.

I read carefully the full text of this Software License Agreement, fully understand it,
I fully declare that I fully agree with it.

                                </pre>
                                </div>
        <div id="tab2" class="tab-pane">
            <pre>
ソフトウェア使用許諾契約書
Rad Solutions Limited（以下「甲」という。）とwebユーザーインターフェースである「Savannah FX」（以下「本ソフトウェア」という。）の使用許諾を受ける者（以下「乙」という。）は、以下のとおり、ソフトウェア使用許諾契約を締結する。

第1条（使用許諾）
１　甲は、乙に対し、本ソフトウェアの無償での使用を許諾する（以下「本許諾」という。）。
２　甲は、乙に対し、本ソフトウェアの更新版及びバージョンアップ版の提供をするものとし、これらも本ソ 　フトウェアに含まれるものとする。
３　本許諾にかかる本ソフトウェアの使用権は、独占的であり、かつ、再許諾不可、譲渡不能のものとする
４　本許諾にともない、乙が提供される、本ソフトウェアが記録された媒体は、乙に貸与されるものであり、所有権は甲に帰属するものとする。

第2条（権利帰属）
1　乙は、本ソフトウェア及び付属ドキュメントに関連する著作権その他の知的財産権（以下単に「著作権等」という。）が、甲に帰属することを確認する。本契約の締結によって、本ソフトウェアの著作権等が、乙に移転するものではない。
2　第4条第1項に基づき乙のためにカスタマイズした部分の著作権等についても、別段の定めをしない限り、前項と同様乙にはないものとする。ただし、当該カスタマイズ部分に含まれる乙の営業秘密や乙が提供した素材を他の用途に使用しないものとする。

第3条（禁止事項）
乙は、甲からの事前の書面による承諾がない限り、次の各号に定める行為を行わない。
（１）乙の事業に使用するため以外の目的で本ソフトウェアを使用すること。
（２）本ソフトウェアの使用権を第三者に貸与、譲渡、リース、レンタル、サブライセンスすること。
（３）本ソフトウェアを複製し、改変し、ネットワーク上で配信し、若しくは他の著作権法上の行為を行い、又は逆アセンブル若しくは逆コンパイル、又は他の方法のリバースエンジニアリングを行うこと。
（４）本件ソフトウェアの性能を公表すること。

第4条（非保証）
1　乙は本ソフトウェアを記録媒体で提供された場合であって、本ソフトウェアの納入後１４日以内に当該媒体に重要な物理的な欠陥を発見したときは、乙は甲に対して、当該期間内に、書面により当該欠陥につき通知をするものとする。この場合、甲は当該媒体を無償で交換します。記録媒体に関する甲の責任は、甲の故意過失の有無を問わず、本項に定めるものをもってすべてとする。
2　前項にかかわらず、本ソフトウェアについては、甲は乙に対し、「現状有姿のまま」で提供するものとし、甲は、本ソフトウェアについての一切の瑕疵担保責任及び保証責任を負わない。ただし、乙が、本ソフトウェアの誤りを発見し、甲に対して、当該欠陥につき通知をした場合、甲は、合理的な期間内に自己が適切と考える修正を行うよう努力するものとする。
3　甲は、乙に対して、本ソフトウェアについて、誤り、動作不良、エラー若しくは他の不具合が生じないこと、第三者の権利を侵害しないこと、商品性、乙若しくは第三者の特定の目的への適合性、又は本契約に明示的定めのない他の事項について、何らの保証もしない。
また甲は、乙が本ソフトウェアを使用した結果又は使用できなかったことによる結果について一切責任を負わないものとする。








第5条（保証）
1　甲は、本契約有効期間中、本ソフトウェアが、甲の指定した環境において、別途甲が定める本ソフトウェアの仕様に従って稼働することを保証する。
2　本ソフトウェアが前項の規定に従って稼働しなかったときは、甲は、乙に対し、本ソフトウェアの納入後１２か月以内に限り、代替品を提供するものとする。
3　前各項の規定に拘らず、本ソフトウェアの仕様不適合が以下のいずれかの場合に生じたときは、甲は乙に対して、当該仕様不適合につき何らの責任も負わない。
（１）当該仕様不適合が、本ソフトウェアと第三者のソフトウェアとの組合せ、又はネットワークの不調に起因する場合
（２）本ソフトウェアが、甲が指定した動作環境又は動作条件とは異なる環境又は条件下で使用された場合
（３）本ソフトウェアが、甲以外の者によって、甲の承諾なく改変された場合
（４）その他、甲の責めに帰すべからざる事由による場合
4　本条の規定は、本ソフトウェアの瑕疵、不具合及び保証に関する甲の一切の責任を規定したものであり、甲は、理由のいかんにかかわらず、乙に対して、金銭的責任を含め、本条以外には一切の保証をせず、かつ責任を負わないものとする。

第6条（ライセンシーの義務）
1　乙は、本ソフトウェアを稼働するために必要な仕様を満たしたコンピューター等のハードウェア、周辺機器、オペレーティングシステム等の環境を、自らの責任と費用において確保・維持するものとする。
2　乙が前項の義務を怠った場合、甲は、瑕疵担保責任、品質保証責任、又はその他一切の責任を負わないものとする。

第7条（第三者による権利侵害）
1　万一、乙において、第三者が、本ソフトウェア及び付属ドキュメントに関連する著作権等の全部又は一部を侵害していることを発見した場合、乙は、甲に対し侵害の事実を速やかに報告し、甲が当該著作権等を保護するために行う措置に対して、甲に援助協力するものとする。
2　前項の場合において、甲は、前記第三者の侵害行為を排除するため、前記第三者に対する差止請求等の必要な措置を講じる権利を有する。

第8条（責任の制限）
甲は、いかなる場合も、間接損害、派生損害、逸失利益、特別の事情から生じた損害（損害発生につき甲の予見の有無を問わない）、データの消失、及びその他、本契約に明示的に定めのない金銭責任は一切負わない。

第9条（譲渡禁止）
1　乙は、事前の承諾なくして、本契約上の地位、並びに、本契約に基づく権利及び義務を第三者に譲渡できないものとする。
2　甲は、事業譲渡その他事業再編のために本契約にかかる事業を他者に承継させる場合には、乙の承諾なく、本契約上の地位、本ソフトウェアの著作権等、及び本ソフトウェアの使用許諾権を第三者に譲渡することができる。

第10条（契約期間）
本契約の契約期間は、契約締結の日より2年間とし、当該期間満了の3か月前までに甲又は乙が相手方に対して書面で、本契約終了等別段に意思表示をしない限り、更に1年間延長されるものとし、以後も同様に自動更新されるものとする。







第11条（契約解除）
乙につき下記の事由が発生したときは、乙に対し、催告を要せず本契約を解除することができる。この場合において乙は当然に期限の利益を喪失し、かつ本許諾は当然に終了する。
（１）本契約の違反があったとき
（２）手形又は小切手の不渡が生じたとき
（３） 破産、特別清算、会社更生、民事再生の申立のあったとき、又は支払停止があったとき
（４） 本ソフトウェアに関する甲の著作権その他の権利を侵害し、又は甲への権利の帰属を争ったとき

第12条（契約終了後の措置等）
1　乙は、本契約終了後直ちに、本ソフトウェアの使用を中止し、解約手続きを行うものとする。また乙は、本ソフトウェアを記録した媒体、データを甲に返還する。
2　本契約終了後も、本契約第2条（権利帰属）、第4条（非保証）、第8条（責任の制限）、第9条（譲渡禁止）、第13条（秘密保持）、及び第14条（合意管轄）の規定は存続する。

第13条（秘密保持）
1　甲及び乙は、本契約の履行に関して相手方から開示された技術上、営業上、又は業務上の情報（以下「秘密情報」という。）について、善良なる管理者の注意をもってその秘密を保持するものとし、本契約の目的外に使用せず、機密情報を第三者に開示してはならないものとする。
2　前項にかかわらず、次の情報は秘密情報に含まれないものとする。
（1）既に公知のもの又は自己の責に帰すことのできない事由により公知となったもの
（2） 相手方から開示を受けた時点で既に保有しているもの
（3） 守秘義務を負うことなく第三者から正当に入手したもの
（4） 相手方から書面により開示を承諾されたもの
3　本条の機密保持義務は、本契約が終了した後も存続するものとする。

第14条（法解釈） 本契約は、日本法に準拠し、日本法に従って解釈される

第15条（合意管轄）
本契約に関する一切の紛争（裁判所の調停手続きを含む。）は、東京簡易裁判所又は東京地方裁判所を第一審の専属的合意管轄裁判所とすることに合意する。

私は、本ソフトウェア使用許諾契約書全文を注意深く読み、完全に理解した上で、
それを完全に受諾、同意することを宣言します。
            </pre>

                            </div>
                        </div>

                        <div class="concent-check">
                            <input type="checkbox" id="concent-check" class="hidden">
                            <label for="concent-check" class="checkbox-label"></label>
                            I agree to the Terms of Use.
                        </div>
                                <button type="submit" id="register-button" class="btn btn-primary" disabled="true">
                                    Register
                                </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(function(){
        $('#concent-check').on('change',function(){
            if($("#concent-check:checked").val()) {
                $('#register-button').prop('disabled',false);
            }else{
                 $('#register-button').prop('disabled',true);  
            }
        });
    })
</script>
@endsection
