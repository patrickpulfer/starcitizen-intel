// Service Worker
if ('serviceWorker' in navigator) {
  navigator.serviceWorker.register('https://pweb.solutions/starcitizen/intel/service-worker.js')
    .then(function (registration) {
      console.log('Registration successful, scope is:', registration.scope);
    })
    .catch(function (error) {
      console.log('Service worker registration failed, error:', error);
    });
}


// Global Variables
var api_secret = '7251613ae2ec7b792655ce6659e2745d';
var api_host = 'https://api.starcitizen-api.com/';
var api_version = '/v1/live';

// Control Variables
var player_searched = 0;

// Arrays
var api_player_info = Array();
var api_organization_info = Array();

$(document).ready(function () {
  $("#player_card").parent().toggle();
  $("#org_card").parent().toggle();

  $("#Search").click(function () {
    var searchbox = $.trim($('input#player_name').val()); // get the value of the input field
    if (searchbox == "") {
      $('#search_status').text('Please enter Player name!');
      $('#search_status').css('color', 'white');
    }
    else {
      getPlayerStats($("#player_name").val());
    }
  }); //search

});

function getPlayerStats(player_name) {

  var player_api_enlist;
  var url = api_host + api_secret + api_version + '/user/' + player_name;
  var req = new Request(url, {
    headers: {
      // 'Content-Type': 'application/json',
      'Accept': 'application/json'
    }
  });

  fetch(req)
    .then(response => response.json())
    .then(data => {
      api_player_info = data.data;

      if (Object.keys(api_player_info).length == 0) {
        $('#search_status').css('color', 'red');
        $('#search_status').text('Player not found!');
      }
      else {
        // Player found message
        $('#search_status').css('color', 'green');
        $('#search_status').text('Match!');

        if ($("#player_card").is(':hidden')) {
          $("#player_card").parent().slideToggle();
        }

        $('#player_api_image').attr('src', api_player_info['profile']['image']);
        $('#player_api_badge').attr('src', api_player_info['profile']['badge_image']);
        $('#player_api_url').attr('href', api_player_info['profile']['page']['url']);
        $('#player_api_rank').text(api_player_info['profile']['badge'])
        $('#player_api_enlisted').text(player_api_enlist)
        $('#player_api_fluency').text(api_player_info['profile']['fluency'])
        $('#player_api_bio').text(api_player_info['profile']['bio'])
        $('#player_api_id').text(api_player_info['profile']['id'])
        $('#player_api_handle').text(api_player_info['profile']['handle'])
        $('#player_api_name').text(api_player_info['profile']['display'])
        $('#player_api_rank').text(api_player_info['organization']['rank'])
        $('#player_api_stars').text(api_player_info['organization']['stars'])

        $('#org_api_image').attr('src', api_player_info['organization']['image']);
        $('#org_api_name').text(api_player_info['organization']['name'])
        $('#org_api_sid').text(api_player_info['organization']['sid'])

        getOrganizationOverview(api_player_info['organization']['sid']);
      }
    })
}

function getOrganizationOverview(organization_sid) {

  var url2 = api_host + api_secret + api_version + '/organization/' + organization_sid;
  var req2 = new Request(url2, {
    headers: {
      // 'Content-Type': 'application/json',
      'Accept': 'application/json'
    }
  });
  fetch(req2)
    .then(response => response.json())
    .then(data => {
      api_organization_info = data.data;

      if (api_organization_info == null) {
        if ($("#org_card").is(':visible')) {
          $("#org_card").parent().slideToggle();
        }
      }
      else {
        $("#org_card").parent().slideToggle();

        $('#org_api_members').text(api_organization_info['members'])
        $('#org_api_recruitment').text(api_organization_info['recruiting'])
        $('#org_api_commitment').text(api_organization_info['commitment'])
        $('#org_api_language').text(api_organization_info['lang'])
        $('#org_api_roleplay').text(api_organization_info['roleplay'])
        $('#org_api_focusp').attr('src', api_organization_info['focus']['primary']['image']);
        $('#org_api_focuss').attr('src', api_organization_info['focus']['secondary']['image']);
        $('#org_api_url').attr('href', api_organization_info['url']);
        $('#org_api_url_members').attr('href', api_organization_info['url'] + '/members');
        $('#org_api_url_spectrum').attr('href', 'https://robertsspaceindustries.com/spectrum/community/' + api_player_info['organization']['sid']);
        $('#org_api_url_advanced').attr('href', 'https://pweb.solutions/starcitizen/intel/org/?org=' + api_player_info['organization']['sid']);
      }

    })
}

function clearResults(organization_sid) {

}
