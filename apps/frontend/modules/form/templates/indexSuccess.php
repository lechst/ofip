<h1>Registration forms List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Is group</th>
      <th>Name</th>
      <th>My email</th>
      <th>Organization name</th>
      <th>Street</th>
      <th>Postal code</th>
      <th>Locality</th>
      <th>Voivodeship</th>
      <th>Phone number</th>
      <th>Fax</th>
      <th>Organization email</th>
      <th>Internet page</th>
      <th>Nip</th>
      <th>Agreement1</th>
      <th>Number of participants</th>
      <th>Fee number</th>
      <th>Fee total</th>
      <th>Fac name</th>
      <th>Fac address</th>
      <th>Fac nip</th>
      <th>Accommodation</th>
      <th>Participation 1</th>
      <th>Participants 1</th>
      <th>Participation 2</th>
      <th>Participants 2</th>
      <th>Participation 3</th>
      <th>Participants 3</th>
      <th>Participation 4</th>
      <th>Participants 4</th>
      <th>Participation 5</th>
      <th>Participants 5</th>
      <th>Participation 6</th>
      <th>Participants 6</th>
      <th>Participation 7</th>
      <th>Participants 7</th>
      <th>Participation 8</th>
      <th>Participants 8</th>
      <th>Participation 9</th>
      <th>Participants 9</th>
      <th>Participation 10</th>
      <th>Participants 10</th>
      <th>Participation 11</th>
      <th>Participants 11</th>
      <th>Participation 12</th>
      <th>Participants 12</th>
      <th>Participation 13</th>
      <th>Participants 13</th>
      <th>Participation 14</th>
      <th>Participants 14</th>
      <th>Participation 15</th>
      <th>Participants 15</th>
      <th>Agreement2</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($registration_forms as $registration_form): ?>
    <tr>
      <td><a href="<?php echo url_for('form/show?id='.$registration_form->getId()) ?>"><?php echo $registration_form->getId() ?></a></td>
      <td><?php echo $registration_form->getIsGroup() ?></td>
      <td><?php echo $registration_form->getName() ?></td>
      <td><?php echo $registration_form->getMyEmail() ?></td>
      <td><?php echo $registration_form->getOrganizationName() ?></td>
      <td><?php echo $registration_form->getStreet() ?></td>
      <td><?php echo $registration_form->getPostalCode() ?></td>
      <td><?php echo $registration_form->getLocality() ?></td>
      <td><?php echo $registration_form->getVoivodeship() ?></td>
      <td><?php echo $registration_form->getPhoneNumber() ?></td>
      <td><?php echo $registration_form->getFax() ?></td>
      <td><?php echo $registration_form->getOrganizationEmail() ?></td>
      <td><?php echo $registration_form->getInternetPage() ?></td>
      <td><?php echo $registration_form->getNIP() ?></td>
      <td><?php echo $registration_form->getAgreement1() ?></td>
      <td><?php echo $registration_form->getNumberOfParticipants() ?></td>
      <td><?php echo $registration_form->getFeeNumber() ?></td>
      <td><?php echo $registration_form->getFeeTotal() ?></td>
      <td><?php echo $registration_form->getFacName() ?></td>
      <td><?php echo $registration_form->getFacAddress() ?></td>
      <td><?php echo $registration_form->getFacNIP() ?></td>
      <td><?php echo $registration_form->getAccommodation() ?></td>
      <td><?php echo $registration_form->getParticipation1() ?></td>
      <td><?php echo $registration_form->getParticipants1() ?></td>
      <td><?php echo $registration_form->getParticipation2() ?></td>
      <td><?php echo $registration_form->getParticipants2() ?></td>
      <td><?php echo $registration_form->getParticipation3() ?></td>
      <td><?php echo $registration_form->getParticipants3() ?></td>
      <td><?php echo $registration_form->getParticipation4() ?></td>
      <td><?php echo $registration_form->getParticipants4() ?></td>
      <td><?php echo $registration_form->getParticipation5() ?></td>
      <td><?php echo $registration_form->getParticipants5() ?></td>
      <td><?php echo $registration_form->getParticipation6() ?></td>
      <td><?php echo $registration_form->getParticipants6() ?></td>
      <td><?php echo $registration_form->getParticipation7() ?></td>
      <td><?php echo $registration_form->getParticipants7() ?></td>
      <td><?php echo $registration_form->getParticipation8() ?></td>
      <td><?php echo $registration_form->getParticipants8() ?></td>
      <td><?php echo $registration_form->getParticipation9() ?></td>
      <td><?php echo $registration_form->getParticipants9() ?></td>
      <td><?php echo $registration_form->getParticipation10() ?></td>
      <td><?php echo $registration_form->getParticipants10() ?></td>
      <td><?php echo $registration_form->getParticipation11() ?></td>
      <td><?php echo $registration_form->getParticipants11() ?></td>
      <td><?php echo $registration_form->getParticipation12() ?></td>
      <td><?php echo $registration_form->getParticipants12() ?></td>
      <td><?php echo $registration_form->getParticipation13() ?></td>
      <td><?php echo $registration_form->getParticipants13() ?></td>
      <td><?php echo $registration_form->getParticipation14() ?></td>
      <td><?php echo $registration_form->getParticipants14() ?></td>
      <td><?php echo $registration_form->getParticipation15() ?></td>
      <td><?php echo $registration_form->getParticipants15() ?></td>
      <td><?php echo $registration_form->getAgreement2() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('form/new') ?>">New</a>
