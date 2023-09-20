'use strict';
{
    document.addEventListener('submit', e => {
        e.preventDefault();
        if(!confirm('本当に削除しますか？')){
            return;
        }
        e.target.submit();
    });

    const now= new Date();
    const month= now.getMonth()+1;
    const date= now.getDate();
    const day= now.getDay();
    const week= ['日','月','火','水','木','金','土'];
    const render= `${month}月${date}日（${week[day]}） の予定`;

    const today=document.getElementById('today').textContent= render;
}
