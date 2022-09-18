
<div class = 'age18_check'>
    <div class="hidden cm-dialog-auto-open cm-dialog-auto-size" id="open_id" title={__('age18')}>
        <div class="modal fade" tabindex="-1" data-keyboard="false">
            <div class="modal-dialog" >
                <div>
                    <div class="modal-body" id="modalBody" data-keyboard="false">
                        <p>{__('age_check')}</p>
                    </div>
                    <form action="{""|fn_url}" method="post">
                        <input type="hidden" name="redirect_url" value="{$config.current_url}" />
                            <p>
                                <label for="age_check">{__('date_birth')}</label>
                                <input type="date" id="age_check" name="age_check"/>
                            </p>                    
                            <div class="modal-footer">
                                <div class="buttons-container">
                                    {include file="buttons/button.tpl" 
                                    but_role="submit" 
                                    but_text=__("verify") 
                                    but_name="dispatch[age18.age18]"
                                    but_meta="ty-btn__secondary"}
                                </div>
                            </div>
                    </form>
                </div>
            </div>
        </div>    
    </div>
</div>